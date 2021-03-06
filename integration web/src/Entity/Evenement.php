<?php

namespace App\Entity;
use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEvent", type="string", length=255)
     * @Groups("post:read")
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvent", type="datetime")
     * @Groups("post:read")
     */
    private $dateEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeEvent", type="integer")
     * @Groups("post:read")
     */
    private $dureeEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEventFin", type="datetime")
     * @Groups("post:read")
     */
    private $dateEventFin;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=255)
     * @Groups("post:read")
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     * @Groups("post:read")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="place", type="integer")
     * @Groups("post:read")
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     * @Groups("post:read")
     */
    private $capacite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomEvent
     *
     * @param string $nomEvent
     *
     * @return Evenement
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    /**
     * Get nomEvent
     *
     * @return string
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * Set dateEvent
     *
     * @param \DateTime $dateEvent
     *
     * @return Evenement
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set dureeEvent
     *
     * @param integer $dureeEvent
     *
     * @return Evenement
     */
    public function setDureeEvent($dureeEvent)
    {
        $this->dureeEvent = $dureeEvent;

        return $this;
    }

    /**
     * Get dureeEvent
     *
     * @return int
     */
    public function getDureeEvent()
    {
        return $this->dureeEvent;
    }

    /**
     * Set dateEventFin
     *
     * @param \DateTime $dateEventFin
     *
     * @return Evenement
     */
    public function setDateEventFin($dateEventFin)
    {
        $this->dateEventFin = $dateEventFin;

        return $this;
    }

    /**
     * Get dateEventFin
     *
     * @return \DateTime
     */
    public function getDateEventFin()
    {
        return $this->dateEventFin;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     *
     * @return Evenement
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Evenement
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return Evenement
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Evenement
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }
}

