<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;



class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('message', TextareaType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le message ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 5,
                    'minMessage' => 'Le message doit contenir au moins 5 caractères.',
                    'max' => 1000,
                    'maxMessage' => 'Le message ne doit pas dépasser 1000 caractères.'
                ])
            ]
        ])
        ->add('auteur', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'L\'auteur est obligatoire.']),
                new Assert\Regex([
                    'pattern' => '/^[a-zA-Z\s\-]+$/',
                    'message' => 'L\'auteur ne doit contenir que des lettres et des espaces.'
                ])
            ]
        ])
            ->add('post', EntityType::class, [
                'class' => Post::class,
                'choice_label' => 'titre', 
                'label' => 'Article associé',
                'placeholder' => 'Sélectionner un post',
                'constraints' => [
                    new Assert\NotNull(['message' => 'Veuillez sélectionner un post.'])
                ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
