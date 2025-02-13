<?php

namespace App\Entity;

use App\Repository\BandeReceptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BandeReceptionRepository::class)]
class BandeReception
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: BandeCommande::class, inversedBy: "receptions")]
    #[ORM\JoinColumn(nullable: false)] 
    #[Assert\NotNull(message: "Veuillez sélectionner une bande de commande.")]
    private ?BandeCommande $bandeCommande = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La référence est obligatoire.")]
    private ?string $reference = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de réception est obligatoire.")]
    private ?\DateTimeInterface $dateReception = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le fournisseur est obligatoire.")]
    private ?string $fournisseur = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La quantité reçue est obligatoire.")]
    #[Assert\Positive(message: "La quantité reçue doit être supérieure à 0.")]
    private ?int $quantiteRecue = null;

    public function __construct()
{
    $this->dateReception = new \DateTime(); 
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->dateReception;
    }

    public function setDateReception(\DateTimeInterface $dateReception): static
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    public function getFournisseur(): ?string
    {
        return $this->fournisseur;
    }

    public function setFournisseur(string $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getQuantiteRecue(): ?int
    {
        return $this->quantiteRecue;
    }

    public function setQuantiteRecue(int $quantiteRecue): static
    {
        $this->quantiteRecue = $quantiteRecue;

        return $this;
    }

    public function getBandeCommande(): ?BandeCommande
    {
        return $this->bandeCommande;
    }

    public function setBandeCommande(?BandeCommande $bandeCommande): static
    {
        $this->bandeCommande = $bandeCommande;

        return $this;
    }
}   
