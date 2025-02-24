<?php
namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Entity\Produit;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('clientId')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'Non Confirmée' => 'non_confirmée',
                    'Confirmée' => 'confirmée',
                    'Payée' => 'payée',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('prix')
            ->add('modePaiement', ChoiceType::class, [
                'choices'  => [
                    'Carte' => 'carte',
                    'Points' => 'points',
                    'Cash' => 'cash',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('produits', CollectionType::class, [
                'entry_type' => ProduitQuantityType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
