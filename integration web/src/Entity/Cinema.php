<?php

namespace App\Entity;

use DateTimeInterface;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Cinema
 *
 * @ORM\Table(name="cinema")
 * @ORM\Entity
 */
/**
 * @ORM\Entity
 * @UniqueEntity("num")
 */
class Cinema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @Groups("post:read")
     */
    public $num;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\NotBlank(message="Date invalid")
     * @Groups("post:read")
     */
    public $date;
    /**
     * @var integer
     * @ORM\Column(name="nbr", type="integer", nullable=false)
     * @Assert\NotBlank(message="nombre invalid ")
     * @Assert\Range(
     *      min = 1,
     *      max = 45,
     *      notInRangeMessage = "You must be between {{ min }}cm and {{ max }}cm tall to enter",
     * )
     * @Groups("post:read")
     */
    public $nbr;

    /**
     * @var \DateTime
     * @ORM\Column(name="heurep", type="time", nullable=false)
     * *@Assert\NotBlank(message="Heure invalid")
     * @Groups("post:read")
     */
    private $heurep;
    /**
     * @var ..\Film
     *
     * @ORM\ManyToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="film", referencedColumnName="id_film")
     * })
     *@Assert\NotBlank(message="film invalid")
     * @Groups("post:read")
     */
    private $film;


    public function getNbr()
    {
        return $this->nbr;
    }

    public function setNbr( $nbr)
    {
        $this->nbr = $nbr;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate( $date)
    {
        $this->date = $date;

        return $this;
    }

    public function getHeurep()
    {
        return $this->heurep;
    }

    public function setHeurep( $heurep){
        $this->heurep = $heurep;

        return $this;
    }


    public function getFilm()
    {
        return $this->film;
    }


    public function setFilm($film)
    {
        $this->film = $film;
    }


    public function __toString() {
        //return (string) $this->getFilm();
        return (string)$this->num;
    }


}
