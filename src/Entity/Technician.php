<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechnicianRepository")
 */
class Technician
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Person", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $person;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Trade", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $trade;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $registrationNumber;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Sector", cascade={"persist", "remove"})
     */
    private $sector;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(Person $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getTrade(): ?Trade
    {
        return $this->trade;
    }

    public function setTrade(Trade $trade): self
    {
        $this->trade = $trade;

        return $this;
    }

    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber(string $registrationNumber): self
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    public function getSector(): ?Sector
    {
        return $this->sector;
    }

    public function setSector(?Sector $sector): self
    {
        $this->sector = $sector;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
