<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateD", type="datetime", nullable=false)
     */
    private $dated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateF", type="datetime", nullable=false)
     */
    private $datef;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=100, nullable=false)
     */
    private $matricule;

    /**
 * @var \Cellule
 *
 * @ORM\ManyToOne(targetEntity="Cellule")
 * @ORM\JoinColumns({
 *   @ORM\JoinColumn(name="idCell", referencedColumnName="idCellule")
 * })
 */
    private $idCell;

    public function getIdreservation(): ?int
    {
        return $this->idreservation;
    }

    public function getDated(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDated(\DateTimeInterface $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDatef(): ?\DateTimeInterface
    {
        return $this->datef;
    }

    public function setDatef(\DateTimeInterface $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getIdCell(): ?cellule
    {
        return $this->idCell;
    }

    public function setIdCell(?cellule $idCell): self
    {
        $this->idCell = $idCell;

        return $this;
    }


}
