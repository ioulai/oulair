<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlightRepository")
 */
class Flight
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arrive;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDeparture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateArrive;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPlace;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="flight")
     */
    private $reservation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="flights")
     */
    private $user;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getArrive(): ?string
    {
        return $this->arrive;
    }

    public function setArrive(string $arrive): self
    {
        $this->arrive = $arrive;

        return $this;
    }

    public function getDateDeparture(): ?\DateTimeInterface
    {
        return $this->dateDeparture;
    }

    public function setDateDeparture(\DateTimeInterface $dateDeparture): self
    {
        $this->dateDeparture = $dateDeparture;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->dateArrive;
    }

    public function setDateArrive(\DateTimeInterface $dateArrive): self
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nbPlace;
    }

    public function setNbPlace(int $nbPlace): self
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation[] = $reservation;
            $reservation->setFlight($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservation->contains($reservation)) {
            $this->reservation->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getFlight() === $this) {
                $reservation->setFlight(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
