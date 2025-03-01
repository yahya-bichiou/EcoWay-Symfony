<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipantRepository::class)]
class Participant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "Le nom est obligatoire.")]
#[Assert\Length(
    min: 2,
    max: 20,
    minMessage: "Le nom doit avoir au moins 2 caractères.",
    maxMessage: "Le nom ne peut pas dépasser 20 caractères."
)]
private ?string $nom = null;

#[ORM\Column]
#[Assert\NotBlank(message: "L'âge est obligatoire.")]
#[Assert\Positive(message: "L'âge doit être un nombre positif.")]
#[Assert\Range(
    min: 18,
    max: 60,
    notInRangeMessage: "L'âge doit être entre 18 et 60 ans."
)]
private ?int $age = null;


#[ORM\Column]
private ?string $telephone = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "L'email est obligatoire.")]
#[Assert\Email(message: "L'adresse email  n'est pas valide.")]
private ?string $email = null;

    #[ORM\ManyToOne(targetEntity: Evenement::class, inversedBy: "participants")]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Evenement $env = null;


 #[ORM\Column(length: 255)]   
#[Assert\NotBlank(message: "Le numéro de cin est obligatoire.")]
#[Assert\Regex(
    pattern: "/^\d{8}$/",
    message: "Le numéro de cin doit contenir exactement 8 chiffres."
)]
private ?string $num = null;


    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEnv(): ?Evenement
    {
        return $this->env;
    }

    public function setEnv(?Evenement $env): static
    {
        $this->env = $env;
        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): static
    {
        $this->num = $num;

        return $this;
    }  
}