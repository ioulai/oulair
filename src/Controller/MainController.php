<?php

namespace App\Controller;

use App\Entity\Flight;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home(EntityManagerInterface $em)
    {
        $flightRepository = $em->getRepository(Flight::class);
        $liste_vol = $flightRepository->findFlight();
        return $this->render('main/home.html.twig', ['user' => $this->getUser(), 'flights' => $liste_vol]);
    }

    /**
     * @Route("/info_legal",name="info_legal")
     */
    public function info_legal()
    {
        return $this->render('main/info_legal.html.twig', ['user' => $this->getUser()]);
    }
}
