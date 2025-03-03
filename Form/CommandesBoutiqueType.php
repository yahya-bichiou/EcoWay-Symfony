<?php

namespace App\Form;

use App\Entity\CommandesBoutique;
use App\Entity\produitsBoutique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandesBoutiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderOwner')
            ->add('orderStatus')
            ->add('orderProducts', EntityType::class, [
                'class' => produitsBoutique::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandesBoutique::class,
        ]);
    }
}
