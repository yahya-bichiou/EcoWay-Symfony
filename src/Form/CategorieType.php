<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Categorie;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
    ->add('nom', TextType::class, [
        'constraints' => [
            new NotBlank([
                'message' => 'Le nom de la catégorie ne peut pas être vide.',
            ]),
            new Length([
                'min' => 3,
                'max' => 255,
                'minMessage' => 'Le nom de la catégorie doit comporter au moins {{ limit }} caractères.',
                'maxMessage' => 'Le nom de la catégorie ne peut pas dépasser {{ limit }} caractères.',
            ]),
        ],
    ])
    ->add('description', TextType::class, [
        'constraints' => [
            new NotBlank([
                'message' => 'La description ne peut pas être vide.',
            ]),
            new Length([
                'min' => 10,
                'max' => 1000,
                'minMessage' => 'La description doit comporter au moins {{ limit }} caractères.',
                'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
            ]),
        ],
    ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
