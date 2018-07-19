<?php

namespace App\Controller;

use App\Entity\Flight;
use App\Entity\User;
use App\Form\FlightType;
use App\Repository\FlightRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlightController extends Controller
{
    /**
     * @Route("/flight", name="flight")
     */
    public function index()
    {
        return $this->render('flight/index.html.twig', [
            'controller_name' => 'FlightController',
        ]);
    }

    /**
     * @Route("/proposer_vol",name="proposer_vol")
     */
    public function proposer_vol(Request $request, EntityManagerInterface $em, FileUploader $fileUploader)
    {
        $flight = new Flight();
        $user = new User();
        $userConnected = $this->getUser();
        //the user connected
        $flight->setUser($userConnected);
        //today's date
        $flight->setDateDeparture(new \DateTime('now'));
        $flight->setName('Vol en ');
        $form = $this->createForm(FlightType::class, $flight);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $flight->getDateArrive() >= $flight->getDateDeparture()) {
            //load images
            /** @var UploadedFile $image */
            $image = $flight->getImage();

            $imageName = $fileUploader->upload($image);
            $flight->setImage($imageName);
            //store image name instead of image itself
            $flight->setImage($imageName);

            $em->persist($flight);
            $em->flush();
            $this->addFlash('succes', 'Le vol a bien été créer');
            return $this->redirectToRoute('liste_vols');
        }
        return $this->render('flight/proposer_vol.html.twig', ['user' => $this->getUser(), 'form_vol' => $form->createView()]);
    }

    /**
     * @Route("/liste_vols",name="liste_vols")
     */
    public function liste_vols(EntityManagerInterface $em)
    {
        /** @var FlightRepository $flightRepository */
        $flightRepository = $em->getRepository(Flight::class);

        $liste_vol = $flightRepository->findFlight();

        return $this->render('flight/liste_vols.html.twig', ['flights' => $liste_vol, 'user' => $this->getUser()]);
    }
}
