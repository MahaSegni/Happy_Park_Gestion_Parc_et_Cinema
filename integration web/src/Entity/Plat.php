<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=PlatRepository::class)
 */
class Plat
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idp;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * min = 5,
     * max = 20,
     * minMessage = "Le nom d'un article doit comporter au moins {{ limit }} caractères",
     * maxMessage = "Le nom d'un article doit comporter au plus {{ limit }} caractères"
     * )
     * @Groups("post:read")
     */
    private $nomp;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=10, max=100)
     * @Assert\NotEqualTo(
     * value = 0,
     * message = "Le prix d’un article ne doit pas être égal à 0 "
     * )
     * @Groups("post:read")
     */
    private $prixp;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="idc")
     * })
     * @Groups("post:read")
     */
    private $categorie;

    /**
     * @Assert\File(maxSize="10000000")
     */
    public $file ;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\File(mimeTypes = {"image/jpeg", "image/png", "image/jpg"})
     * @Groups("post:read")
     */
    private $imagep;

    /**
     * @ORM\Column(type="text")
     * @Groups("post:read")
     */
    private $description;

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function setIdp(int $idp): self
    {
        $this->idp = $idp;

        return $this;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp)
    {
        $this->nomp = $nomp;

        return $this;
    }

    public function getPrixp(): ?int
    {
        return $this->prixp;
    }

    public function setPrixp(int $prixp): self
    {
        $this->prixp = $prixp;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImagep(): ?string
    {
        return $this->imagep;
    }

    public function setImagep(string $imagep): self
    {
        $this->imagep = $imagep;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
