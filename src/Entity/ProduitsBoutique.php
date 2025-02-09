<?php

namespace App\Entity;

use App\Repository\ProduitsBoutiqueRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitsBoutiqueRepository::class)]
class ProduitsBoutique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Length(min: 2, minMessage: 'Min lenght 2')]
    #[Assert\Regex('/^[a-z]+(?:-[a-z]+)*$/', message: 'Invalid name')]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Length(min: 5)]
    #[Assert\Regex('/^[a-z]+(?:-[a-z]+)*$/', message: 'Invalid description')]
    private ?string $productDesc = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Length(min: 2)]
    #[Assert\Regex('/^[a-z]+(?:-[a-z]+)*$/', message: 'Invalid category')]
    private ?string $productCategory = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Positive]
    #[Assert\Regex('/^[0-9]+(?:-[0-9]+)*$/', message: 'Invalid price')]
    private ?float $productPrice = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Positive]
    #[Assert\Regex('/^[0-9]+(?:-[0-9]+)*$/', message: 'Invalid stock')]
    private ?float $productStock = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Length(min: 2)]
    #[Assert\Regex('/^[a-z]+(?:-[a-z]+)*$/', message: 'Invalid image link')]
    private ?string $productImage = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): static
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductDesc(): ?string
    {
        return $this->productDesc;
    }

    public function setProductDesc(string $productDesc): static
    {
        $this->productDesc = $productDesc;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function setProductCategory(string $productCategory): static
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    public function setProductPrice(float $productPrice): static
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    public function getProductStock(): ?float
    {
        return $this->productStock;
    }

    public function setProductStock(float $productStock): static
    {
        $this->productStock = $productStock;

        return $this;
    }

    public function getProductImage(): ?string
    {
        return $this->productImage;
    }

    public function setProductImage(string $productImage): static
    {
        $this->productImage = $productImage;

        return $this;
    }
}
