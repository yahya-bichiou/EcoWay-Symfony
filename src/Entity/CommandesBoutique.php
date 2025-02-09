<?php

namespace App\Entity;

use App\Repository\CommandesBoutiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommandesBoutiqueRepository::class)]
class CommandesBoutique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Positive]
    #[Assert\Regex('/^[0-9]+(?:-[0-9]+)*$/', message: 'Invalid user Id')]
    private ?float $orderOwner = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Should not be blank')]
    #[Assert\Length(min: 3)]
    #[Assert\Regex('/^[a-z]+(?:-[a-z]+)*$/', message: 'Invalid status')]
    private ?string $orderStatus = null;

    /**
     * @var Collection<int, ProduitsBoutique>
     */
    #[ORM\ManyToMany(targetEntity: ProduitsBoutique::class)]
    private Collection $orderProducts;

    public function __construct()
    {
        $this->orderProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderOwner(): ?float
    {
        return $this->orderOwner;
    }

    public function setOrderOwner(float $orderOwner): static
    {
        $this->orderOwner = $orderOwner;

        return $this;
    }

    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(string $orderStatus): static
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return Collection<int, ProduitsBoutique>
     */
    public function getOrderProducts(): Collection
    {
        return $this->orderProducts;
    }

    public function addOrderProduct(ProduitsBoutique $orderProduct): static
    {
        if (!$this->orderProducts->contains($orderProduct)) {
            $this->orderProducts->add($orderProduct);
        }

        return $this;
    }

    public function removeOrderProduct(ProduitsBoutique $orderProduct): static
    {
        $this->orderProducts->removeElement($orderProduct);

        return $this;
    }
}
