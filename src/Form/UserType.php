<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email',EmailType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Please enter your email',
                ]),]])
            ->add('nom', null ,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter nom',
                    ]),]])
            ->add('prenom',null , [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter prenom',
                    ]),]])
            ->add('adresse',null , [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter adresse',
                    ]),]])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_UTILISATEUR',
                    'Livreur' => 'ROLE_LIVREUR',
                ],
                'expanded' => true,
                'multiple' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please select at least one role.',
                    ]),]
            ],)
            ->add('date_naissance', DateType::class, [
                'widget' => 'single_text' ,
                'format' => 'yyyy-MM-dd' ,
                ])
                ->add('num_tel', null, [
                    'constraints' => [
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Your number should be {{ limit }} numbers',
                            // max length allowed by Symfony for security reasons
                            'max' => 8,
                        ]),
                    ],])
        
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
