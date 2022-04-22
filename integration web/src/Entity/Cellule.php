<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Cellule
 *
 * @ORM\Table(name="cellule")
 * @ORM\Entity
 */
class Cellule
{
    /**
     * @var string
     *
     * @ORM\Column(name="idCellule", type="string", length=100, nullable=false)
     * @ORM\Id
     * @Groups("post:read")
     */
    public $idcellule;

    /**
     * @var bool
     * @Groups("post:read")
     * @ORM\Column(name="dispo", type="boolean", nullable=false)
     */
    public $dispo;

    public function getIdcellule(): ?string
    {
        return $this->idcellule;
    }

    public function getDispo(): ?bool
    {
        return $this->dispo;
    }

    public function setDispo(bool $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function __toString() {

        return $this->getIdcellule();

    }

    public function setIdcellule(String $dispo)
    {
        $this->idcellule = $dispo;

        return $this;
    }
}
