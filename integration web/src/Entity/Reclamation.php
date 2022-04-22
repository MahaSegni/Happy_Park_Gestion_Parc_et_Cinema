<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeZoneToStringTransformer;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="cle_pk12", columns={"abonne_id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idrec;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600, nullable=false)
     * @Groups("post:read")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=200, nullable=false)
     * @Groups("post:read")
     */
    private $field;

    /**
     *
     * @ORM\Column(name="datee", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     * @Groups("post:read")
     */
    private $datee;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     * @Groups("post:read")
     */
    private $rate;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="abonne_id", referencedColumnName="id")
     * })
     * @Groups("post:read")
     */
    private $abonne;

    public function getIdrec()
    {
        return $this->idrec;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function getField()
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function getDatee()
    {
        return $this->datee;
    }

    public function setDatee(DateTimeInterface $datee)
    {
        $this->datee = $datee;
        return $this;
    }




    public function getRate()
    {
        return $this->rate;
    }

    public function setRate(float $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    public function getAbonne()
    {
        return $this->abonne;
    }

    public function setAbonne(?Abonne $abonne)
    {
        $this->abonne = $abonne;

        return $this;
    }



}
