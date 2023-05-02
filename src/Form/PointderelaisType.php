<?php

namespace App\Form;

use App\Entity\Pointderelais;
use App\Entity\Livraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Repository\LivraisonRepository;
use Doctrine\ORM\EntityManagerInterface;

=======
use App\Repository\LivraisonRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

class PointderelaisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adressePointderelais')
<<<<<<< HEAD
            ->add('region', ChoiceType::class, [
                'choices' => [
                    'Ariana' => 'Ariana',
                    'Tunis' => 'Tunis',
                    'BenArous' => 'BenArous',
                    'Beja' => 'Beja',
                    'Bizerte' => 'Bizerte',
                    'Gabes' => 'Gabes',
                    'Gafsa' => 'Gafsa',
                    'Jendouba' => 'Jendouba',
                    'Kairaouan' => 'Kairaouan',
                    'Kasserine' => 'Kasserine',
                    'Kelibi' => 'Kelibi',
                    'Kef' => 'Kef',
                    'Mahdia' => 'Mahdia',
                    'Manouba' => 'Manouba',
                    'Mednine' => 'Mednine',
                    'Monastir' => 'Monastir',
                    'Nabeul' => 'Nabeul',
                    'Sfax' => 'Sfax',
                    'SidiBouzid' => 'SidiBouzid',
                    'Sliana' => 'Sliana',
                    'Sousse' => 'Sousse',
                    'Tataouine' => 'Tataouine',
                    'Tozeur' => 'Tozeur',
                    'Zaghouan' => 'Zaghouan',
                ]
            ])
            ->add('horaire', ChoiceType::class, [
                'choices' => [
                    '08:00' => 8,
                    '09:00' => 9,
                    '10:00' => 10,
                    '11:00' => 11,
                    '12:00' => 12,
                    '13:00' => 13,
                    '14:00' => 14,
                    '15:00' => 15,
                    '16:00' => 16,
                    '17:00' => 17,
                    '18:00' => 18,
                ]
            ])
            ->add('fkIdLivraisonp', EntityType::class, [
                'class' => Livraison::class,
                'choice_label' => 'idLivraison',
                
            ]);
=======
            ->add('region',ChoiceType::class,['choices'=>[
                'Ariana'=> 'Ariana' ,
                'Tunis'=> 'Tunis',
                'BenArous'=>'BenArous' ,
                'Beja'=> 'Beja',
                'Bizerte'=> 'Bizerte',
                'Gabes'=> 'Gabes',
                'Gafsa'=> 'Gafsa',
                'Jendouba'=> 'Jendouba',
                'Kairaouan'=> 'Kairaouan',
                'Kasserine'=> 'Kasserine',
                'Kelibi'=> 'Kelibi',
                'Kef'=> 'Kef',
                'Mahdia'=> 'Mahdia',
                'Manouba'=> 'Manouba',
                'Mednine'=> 'Mednine',
                'Monastir'=> 'Monastir',
                'Nabeul'=> 'Nabeul',
                'Sfax'=> 'Sfax',
                'SidiBouzid'=> 'SidiBouzid',
                'Sliana'=> 'Sliana',
                'Sousse'=> 'Sousse',
                'Tataouine'=> 'Tataouine',
                'Tozeur'=> 'Tozeur',
                'Zaghouan'=> 'Zaghouan',
            ]])
            ->add('horaire',ChoiceType::class,['choices'=>[
                '08:00'=> 8,
                '09:00'=> 9,
                '10:00'=> 10,
                '11:00'=> 11,
                '12:00'=> 12,
                '13:00'=> 13,
                '14:00'=> 14,
                '15:00'=> 15,
                '16:00'=> 16,
                '17:00'=> 17,
                '18:00'=> 18,
                
            ]])

            ->add('fkIdLivraisonp', EntityType::class, [
                'class' => Livraison::class,
                'choice_label' => 'idLivraison',
                'query_builder' => function (LivraisonRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->andWhere('l.etatLivraison = :etat')
                        ->setParameter('etat', 'en cours');
                },
            ])


          

            
        ;
          
           
        
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pointderelais::class,
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
