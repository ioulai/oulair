<?php

namespace App\Controller;

use App\Entity\Flight;
use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\FlightRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index()
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    /**
     * @Route("/reservation/{id}",name="reservation"),requirement=("id"="\d+")
     */
    public function reservation(Flight $flight, Request $request, EntityManagerInterface $em)
    {

        //enregistrement reservation
        $reservation = new Reservation();
        $reservation->setNumber('VOL-' . $flight->getId());
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $flight->getNbPlace() >= 0) {
            /** @var User $user */
            $user = $this->getUser();
            $user->addReservation($reservation);
            //maj des places restantes du vol

            $flight->setNbPlace($flight->getNbPlace() - $reservation->getNbPlace());
            $reservation->setFlight($flight);
            $em->persist($flight);
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'La reservation a bien été pris en compte, merci !');
            return $this->redirectToRoute('reservation_user', ["id" => $user->getId()]);
        }

        return $this->render('reservation/reservation.html.twig', ['user' => $this->getUser(), 'flight' => $flight, 'form_reservation' => $form->createView()]);
    }


    /**
     * @Route("/reservation_user/{id}", name="reservation_user"),requirement=("id"="\d+")
     */
    public function reservation_user(User $user, EntityManagerInterface $em)
    {
        return $this->render('reservation/reservation_user.html.twig', ['user' => $this->getUser()]);
    }


    /**
     * @Route("/reservation_modif/{reservation}",name="reservation_modif")
     */
    public function reservation_modif(User $user, EntityManagerInterface $em)
    {

    }

    /**
     * @Route("/reservation_remove/{id}",name="reservation_remove")
     */
    public function reservation_remove($id)
    {

//        $user->removeReservation($user);
        return $this->render('reservation/reservation_remove.html.twig',['id'=>$id]);
    }
}
