<?php

namespace App\Form;

use App\Entity\commande;
use App\Entity\Livraison;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('livreur')
            ->add('adresse')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('mode', ChoiceType::class, [
                'choices'  => [
                    'Same Day' => 'same_day',
                    'Fast' => 'fast',
                    'Normal' => 'normal',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('commande', EntityType::class, [
                'class' => commande::class,
                'choice_label' => 'id',
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
