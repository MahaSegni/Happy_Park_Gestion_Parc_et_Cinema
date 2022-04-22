<?php

namespace App\Entity;

use App\Repository\AvisClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=AvisClientRepository::class)
 */
class AvisClient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;
/*
    /**
     * @var ..\Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRclient", referencedColumnName="id")
     * })
     *
     */
   // private $idRclient;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups("post:read")
     */
    private $rating;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $desc_r;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    public function getDescR()
    {
        return $this->desc_r;
    }

    public function setDescR(string $descR)
    {
        $this->desc_r = $descR;

        return $this;
    }



}
