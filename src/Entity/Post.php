<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le titre doit contenir au moins 3 caractères.",
        maxMessage: "Le titre ne doit pas dépasser 255 caractères."
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        max: 2000,
        maxMessage: "La description ne peut pas dépasser 2000 caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le créateur est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s\-]+$/",
        message: "Le créateur ne doit contenir que des lettres et des espaces."
    )]
    private ?string $createur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\File(
        maxSize: "2M",
        mimeTypes: ["image/jpeg", "image/png"],
        mimeTypesMessage: "Veuillez uploader une image JPG ou PNG valide."
    )]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Commentaire::class, cascade: ['remove'], orphanRemoval: true)]
    private Collection $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreateur(): ?string
    {
        return $this->createur;
    }

    public function setCreateur(string $createur): static
    {
        $this->createur = $createur;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
