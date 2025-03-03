<?php

namespace App\Form;

use App\Entity\BandeReception;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\BandeCommande;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class BandeReceptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('bandeCommande', EntityType::class, [
            'class' => BandeCommande::class,
            'choice_label' => 'reference',
            'placeholder' => 'Sélectionnez une bande de commande',
            'required' => false, 
        ])
        ->add('reference', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'La référence est obligatoire.']),
            ],
        ])
            ->add('dateReception', null, [
                'widget' => 'single_text',
                'required' => true,
                'empty_data' => (new \DateTime())->format('Y-m-d H:i:s'),
            ])
            ->add('fournisseur',TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le fournisseur est obligatoire.']),
                ],
            ])
            ->add('quantiteRecue',IntegerType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'La quantité reçue est obligatoire.']),
                    new Positive(['message' => 'La quantité reçue doit être supérieure à 0.']),
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BandeReception::class,
        ]);
    }
}
