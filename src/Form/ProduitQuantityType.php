<?php
namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitQuantityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('produit', EntityType::class, [
            'class' => Produit::class,
            'choice_label' => 'nom', // Show product name in dropdown
            'placeholder' => 'Choisissez un produit',
            'mapped' => false, // We will handle mapping manually
        ])
        ->add('quantity', NumberType::class, [
            'required' => true,
        ]);
    }
}
