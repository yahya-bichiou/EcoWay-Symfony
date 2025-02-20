<?php

namespace App\Entity;

use App\Repository\PhaseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PhaseRepository::class)]
class Phase
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column( nullable: true)]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "les numeros sont obligatoires.")]
    private ?int $num_p = null;

    #[ORM\Column(length: 255 ,  nullable: true)]
    #[Assert\NotBlank(message: "La description sont obligatoires.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "La description ne doit pas dépasser 50 caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255 ,  nullable: true)]
    #[Assert\Date(message: "La date  doit être une date valide.")]
    private ?string $date_p = null;

    #[ORM\Column(length: 255 ,  nullable: true)]
    #[Assert\NotBlank(message: "La description sont obligatoires.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "La status ne doit pas dépasser 50 caractères."
    )]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNump(): ?int
    {
        return $this->num_p;
    }

    public function setNumP(?int $num_p): static
    {
        $this->num_p = $num_p;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateP(): ?string
    {
        return $this->date_p;
    }

    public function setDateP(?string $date_p): static
    {
        $this->date_p = $date_p;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
