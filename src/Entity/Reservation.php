<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="reservations", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Flight", inversedBy="reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $flight;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbPlace;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
        }

        return $this;
    }

    public function getFlight(): ?Flight
    {
        return $this->flight;
    }

    public function setFlight(?Flight $flight): self
    {
        $this->flight = $flight;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->NbPlace;
    }

    public function setNbPlace(int $NbPlace): self
    {
        $this->NbPlace = $NbPlace;

        return $this;
    }
}
