<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du post',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le titre est obligatoire.']),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le titre doit contenir au moins 3 caractères.',
                        'max' => 255,
                        'maxMessage' => 'Le titre ne doit pas dépasser 255 caractères.'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description ne peut pas être vide.']),
                    new Assert\Length([
                        'max' => 2000,
                        'maxMessage' => 'La description ne peut pas dépasser 2000 caractères.'
                    ])
                ]
            ])
            ->add('createur', TextType::class, [
                'label' => 'Créateur',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le créateur est obligatoire.']),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s\-]+$/',
                        'message' => 'Le créateur ne doit contenir que des lettres et des espaces.'
                    ])
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (fichier)',
                'mapped' => false, // Ne pas lier directement à l'entité
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, WEBP).',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
