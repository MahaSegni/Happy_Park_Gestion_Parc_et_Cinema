<?php

namespace App\Entity;

use App\Repository\CategoriefRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=CategoriefRepository::class)
 */
class Categorief
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $descC;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescC(): ?string
    {
        return $this->descC;
    }

    public function setDescC(string $descC): self
    {
        $this->descC = $descC;

        return $this;
    }
    public function __toString() {
        return (String)$this->descC;
    }
}
