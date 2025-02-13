<?php

namespace App\Form;

use App\Entity\BandeCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;




class BandeCommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference')
            ->add('datecommande', DateTimeType::class, [
                'widget' => 'single_text', 
                'empty_data' => (new \DateTime())->format('Y-m-d H:i:s') 
            ])
            ->add('fournisseur')
            ->add('quantiteTotale')
            ->add('statut', ChoiceType::class, [
                'choices'  => [
                    'En attente' => 'En attente',
                    'Validé' => 'Validé',
                    'Refusé' => 'Refusé',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un statut.',
                    ]),
                ],
                'placeholder' => 'Sélectionner un statut',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BandeCommande::class,
        ]);
    }
}
