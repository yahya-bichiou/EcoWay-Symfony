<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Positive]
    private ?float $clientId = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull]
    #[Assert\Type(\DateTimeInterface::class)]
    #[Assert\LessThanOrEqual("today", message: "La date doit être au passé")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Positive]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $modePaiement = null;

    #[ORM\Column(type: Types::JSON)]
    private array $produits = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?float
    {
        return $this->clientId;
    }

    public function setClientId(float $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->modePaiement;
    }

    public function setModePaiement(string $modePaiement): static
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    public function getProduits(): array
    {
        return $this->produits ?? [];
    }

    public function setProduits(array $produits): self
    {
        $this->produits = $produits;
        return $this;
    }

    public function calculateTotalPrice(): void
    {
    $totalPrice = 0;

    foreach ($this->getProduits() as $produitData) {
        // Assuming 'prix' is the product price and 'quantity' is the quantity added
        $totalPrice += $produitData['prix'] * $produitData['quantity'];
    }

    $this->setPrix($totalPrice); // Assuming your Commande entity has a `prix` field
    }

}
