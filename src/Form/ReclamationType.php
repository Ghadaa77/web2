<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;
=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('objectif')
            ->add('text')
            ->add('fkIdUtilisateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ;
=======
        ->add('objectif')
            ->add('text')
        ;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
