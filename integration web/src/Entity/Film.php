<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity
 */
class Film
{
    /**
     *@ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @Groups("post:read")
     */
    public $id_film;

    /**
     * @ORM\Column(name="nomFilm",type="string")
     *@Assert\Length(
     *      min = 4,
     *      max = 300,
     *      minMessage = "le minimum 4 caracteres",
     *      maxMessage = "limite depasser maximum est 100 caracteres "
     * )
     * @Assert\NotBlank(message="Description obligatoire")
     * @Groups("post:read")
     */

    private $nomFilm;
//@var \DateTime
    /**
     *
     * @ORM\Column(name="datesortie", type="date", nullable=false)
     * @Assert\NotBlank(message="Date de sortie invalid")
     * @Groups("post:read")
     */
    private $dateSortie;


    /**
     * @var ..\Categorief
     *
     * @ORM\OneToOne(targetEntity="Categorief")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     * @Groups("post:read")
     *
     */
    //@Assert\NotBlank(message="Categorie invalid")
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Length(
     *      min = 4,
     *      max = 300,
     *      minMessage = "le minimum 4 caracteres",
     *      maxMessage = "limite depasser maximum est 100 caracteres "
     * )
     * @Assert\NotBlank(message="Description obligatoire")
     * @Groups("post:read")
     */
    private $descriptionf;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\File(
     *      maxSize="5242880",
     *    mimeTypes={"image/jpg","image/jpeg","image/gif","image/png"}
     * )
     * @Assert\NotBlank(message="Affiche obligatoire")
     * @Groups("post:read")
     */
    private $filename;


    public function getIdFilm()
    {
        return $this->id_film;
    }

    public function setIdFilm($id_film)
    {
        $this->id_film = $id_film;
    }




    public function getNomFilm()
    {
        return $this->nomFilm;
    }

    public function setNomFilm(string $nomFilm)
    {
        $this->nomFilm = $nomFilm;

        return $this;
    }

    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function setDateSortie(DateTimeInterface $dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }


    public function __toString() {
        return $this->nomFilm;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getDescriptionf()
    {
        return $this->descriptionf;
    }

    public function setDescriptionf(string $descriptionf)
    {
        $this->descriptionf = $descriptionf;

        return $this;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename( $filename)
    {
        $this->filename = $filename;

        return $this;
    }





}
