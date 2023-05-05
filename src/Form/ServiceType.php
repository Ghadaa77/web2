<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('descriptionService',null , [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter description',
                    ]),]])
            ->add('dateService')
            ->add('prixService',null , [
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 0,
                        'message' => 'Number should not be negative',
                    ]),]
        ])

            ->add('typePaiementService',null , [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter type paiement',
                    ]),]])
            ->add('fkIdCategorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
