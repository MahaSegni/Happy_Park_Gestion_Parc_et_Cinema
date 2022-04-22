<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parking
 *
 * @ORM\Table(name="parking")
 * @ORM\Entity
 */
class Parking
{
    /**
     * @var int
     *
     * @ORM\Column(name="idParking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparking;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;

    public function getIdparking(): ?int
    {
        return $this->idparking;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


}
