<?php
namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
class Produit1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('type')
            ->add('qualite', ChoiceType::class, [
                'choices' => [
                    'Standard' => 'Standard',
                    'Premium' => 'Premium',
                    'Bio' => 'Bio',
                ],
                'placeholder' => 'Sélectionner une qualité', // Valeur par défaut incitant à faire un choix
                'attr' => ['class' => 'form-select'], // Pour ajouter une classe CSS personnalisée si nécessaire
            ])
            ->add('quantite_disponible')
            ->add('prix')
            ->add('date_ajout', null, [
                'widget' => 'single_text',
            ])
            ->add('image');
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
