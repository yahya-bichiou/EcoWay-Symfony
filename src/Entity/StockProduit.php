<?php

namespace App\Entity;

use App\Repository\StockProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StockProduitRepository::class)]
class StockProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: "La quantité entrante ne peut pas être vide.")]
    #[Assert\Type(type: "integer", message: "La quantité entrante doit être un entier.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "La quantité entrante ne peut pas être inférieure à zéro.")]
    private ?int $quantite_entrante = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: "La quantité sortante ne peut pas être vide.")]
    #[Assert\Type(type: "integer", message: "La quantité sortante doit être un entier.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "La quantité sortante ne peut pas être inférieure à zéro.")]
    private ?int $quantite_sortante = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: "La quantité actuelle ne peut pas être vide.")]
    #[Assert\Type(type: "integer", message: "La quantité actuelle doit être un entier.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "La quantité actuelle ne peut pas être inférieure à zéro.")]
    private ?int $quantite_actuelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message: "La date de l'opération ne peut pas être vide.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "La date d'opération doit être valide.")]
    private ?\DateTimeInterface $date_operation = null;

    /**
     * @var Collection<int, Produit>
     */
    #[ORM\OneToMany(targetEntity: Produit::class, mappedBy: 'stock')]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getQuantiteEntrante(): ?int
    {
        return $this->quantite_entrante;
    }

    public function setQuantiteEntrante(int $quantite_entrante): static
    {
        $this->quantite_entrante = $quantite_entrante;
        return $this;
    }

    public function getQuantiteSortante(): ?int
    {
        return $this->quantite_sortante;
    }

    public function setQuantiteSortante(int $quantite_sortante): static
    {
        $this->quantite_sortante = $quantite_sortante;
        return $this;
    }

    public function getQuantiteActuelle(): ?int
    {
        return $this->quantite_actuelle;
    }

    public function setQuantiteActuelle(int $quantite_actuelle): static
    {
        $this->quantite_actuelle = $quantite_actuelle;
        return $this;
    }

    public function getDateOperation(): ?\DateTimeInterface
    {
        return $this->date_operation;
    }

    public function setDateOperation(?\DateTimeInterface $date_operation): static
    {
        $this->date_operation = $date_operation;
        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setStock($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getStock() === $this) {
                $produit->setStock(null);
            }
        }

        return $this;
    }
}
