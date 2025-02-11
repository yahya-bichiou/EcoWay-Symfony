<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Le message ne peut pas être vide.")]
    #[Assert\Length(
        min: 5,
        max: 1000,
        minMessage: "Le message doit contenir au moins 5 caractères.",
        maxMessage: "Le message ne doit pas dépasser 1000 caractères."
    )]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'auteur est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s\-]+$/",
        message: "L'auteur ne doit contenir que des lettres et des espaces."
    )]
    private ?string $auteur = null;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: "commentaires")]
    #[ORM\JoinColumn(nullable: false)]
    private ?post $post = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getPost(): ?post
    {
        return $this->post;
    }

    public function setPost(?post $post): static
    {
        $this->post = $post;

        return $this;
    }
}
