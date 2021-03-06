<?php

namespace App\Entity;

use App\Repository\CongeRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CongeRepository::class)
 * @UniqueEntity("idconge",message="unique")
 */
class Conge
{


    /**
     *  @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @Groups("post:read")
     */
    public $idconge;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="champs obligatoire")
     * @Assert\GreaterThan("today")
     *  @Groups("post:read")
     */
    public $dateconge;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champs obligatoire")
     * @Groups("post:read")
     */
    public $motifconge;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="champs obligatoire")
     * @Assert\LessThanOrEqual(60)
     * @Groups("post:read")
     */
    public $nbjourconge;

    /**
     * @ORM\ManyToOne(targetEntity=employe::class, inversedBy="conges")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="idemp" )
     * @Assert\NotBlank(message="champs obligatoire")
     *  @Groups("post:read")
     */
    private $employe;




    public function getIdConge(): ?int
    {
        return $this->idconge;
    }

    public function setIdConge(?int $idconge): self
    {
        $this->idconge = $idconge;

        return $this;
    }

    public function getDateConge()
    {
        return $this->dateconge;
    }

    public function setDateConge( $dateconge): self
    {
        $this->dateconge = $dateconge;

        return $this;
    }

    public function getMotifConge(): ?string
    {
        return $this->motifconge;
    }

    public function setMotifConge(?string $motifconge): self
    {
        $this->motifconge = $motifconge;

        return $this;
    }

    public function getNbJourConge(): ?int
    {
        return $this->nbjourconge;
    }

    public function setNbJourConge(?int $nbjourconge): self
    {
        $this->nbjourconge = $nbjourconge;

        return $this;
    }

    public function getEmploye(): ?employe
    {
        return $this->employe;
    }

    public function setEmploye(?employe $employe): self
    {
        $this->employe = $employe;

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (String)$this->idconge;
    }


}
