<?php

namespace App\Entity;
use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{

    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    public $idc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * min = 5,
     * max = 50,
     * minMessage = "Le nom d'un article doit comporter au moins {{ limit }} caractères",
     * maxMessage = "Le nom d'un article doit comporter au plus {{ limit }} caractères"
     * )
     * @Groups("post:read")
     */
    private $nomc;




    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function setId(int $idc): self
    {
        $this->idc = $idc;

        return $this;
    }

    public function getNomc(): ?string
    {
        return $this->nomc;
    }

    public function setNomc(string $nomc): self
    {
        $this->nomc = $nomc;

        return $this;
    }

    public function __toString() {
        return $this->nomc;
    }

}
