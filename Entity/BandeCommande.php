<?php

namespace App\Entity;

use App\Repository\BandeCommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: BandeCommandeRepository::class)]
class BandeCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La référence est obligatoire.")]
    private ?string $reference = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de commande est requise.")]
    #[Assert\Type("\DateTimeInterface", message: "La date doit être valide.")]
    private ?\DateTimeInterface $datecommande = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le fournisseur est requis.")]
    private ?string $fournisseur = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La quantité totale est obligatoire.")]
    #[Assert\Positive(message: "La quantité doit être un nombre positif.")]
    private ?int $quantiteTotale = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(choices: ["En attente", "Validé", "Annulé"], message: "Choisissez un statut valide.")]
    private ?string $statut = null; 

    #[ORM\OneToMany(targetEntity: BandeReception::class, mappedBy: "bandeCommande")]
    private Collection $bandeReceptions;

public function __construct()
{
    $this->bandeReceptions = new ArrayCollection();
}
public function getBandeReceptions(): Collection
{
    return $this->bandeReceptions;
}

public function addBandeReception(BandeReception $bandeReception): static
{
    if (!$this->bandeReceptions->contains($bandeReception)) {
        $this->bandeReceptions->add($bandeReception);
        $bandeReception->setBandeCommande($this);
    }

    return $this;
}

public function removeBandeReception(BandeReception $bandeReception): static
{
    if ($this->bandeReceptions->removeElement($bandeReception)) {
        // Déconnecte la réception de la commande
        if ($bandeReception->getBandeCommande() === $this) {
            $bandeReception->setBandeCommande(null);
        }
    }

    return $this;
}

public function getReceptions(): Collection
{
    return $this->receptions;
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
    public function __constructdate()
    {
        $this->datecommande = new \DateTime();
    }

    public function getDatecommande(): ?\DateTimeInterface
    {
        return $this->datecommande;
    }

    public function setDatecommande(\DateTimeInterface $datecommande): static
    {
        $this->datecommande = $datecommande;
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

    public function getQuantiteTotale(): ?int
    {
        return $this->quantiteTotale;
    }

    public function setQuantiteTotale(int $quantiteTotale): static
    {
        $this->quantiteTotale = $quantiteTotale;

        return $this;
    }

    public function __constructstatut()
    {
        $this->statut = 'En attente'; 
    }


    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut ?? 'En attente';

        return $this;
    }
}
