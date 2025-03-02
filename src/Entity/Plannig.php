<?php

namespace App\Entity;

use App\Repository\PlannigRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PlannigRepository::class)]
class Plannig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255 , nullable: true)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\Date(message: "La date de début doit être une date valide.")]
    private ?string $date_debut = null;

    #[ORM\Column(length: 255 , nullable: true)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    #[Assert\Date(message: "La date de fin doit être une date valide.")]
    #[Assert\Expression(
        "this.getDateDebut() <= this.getDateFin()",
        message: "La date de fin doit être postérieure ou égale à la date de début."
    )]
    private ?string $date_fin = null;

    #[ORM\Column(length: 255 , nullable: true)]
    #[Assert\NotBlank(message: "Les étapes sont obligatoires.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Les étapes ne doivent pas dépasser 50 caractères."
    )]
    private ?string $etapes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?string
    {
        return $this->date_debut;
    }

    public function setDateDebut(?string $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->date_fin;
    }

    public function setDateFin(?string $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getEtapes(): ?string
    {
        return $this->etapes;
    }

    public function setEtapes(?string $etapes): static
    {
        $this->etapes = $etapes;

        return $this;
    }

    private $num;

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(?int $num): self
    {
        $this->num = $num;
        return $this;
    }
}
