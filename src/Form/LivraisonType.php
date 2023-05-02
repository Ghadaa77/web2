<?php

namespace App\Form;

use App\Entity\Livraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;
use App\Entity\Pointderelais;
use App\Repository\UserRepository;
<<<<<<< HEAD
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627


class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('dateLivraison', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'view_timezone' => 'Europe/Paris', // add this line
            ])
=======
        ->add('dateLivraison', DateType::class, [
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'view_timezone' => 'Europe/Paris', // add this line
        ])
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
            ->add('prixLivraison')
            ->add('adresseLivraison')
            ->add('etatLivraison')
            ->add('fkIdLivreur', EntityType::class, [
                'class' => User::class,
<<<<<<< HEAD
                'query_builder' => function (EntityRepository $userRepository) {
=======
                'query_builder' => function (UserRepository $userRepository) {
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
                    return $userRepository->createQueryBuilder('u')
                        ->andWhere('u.role = :role')
                        ->setParameter('role', 'livreur')
                        ->orderBy('u.id', 'ASC');
                },
                'choice_label' => function (User $user) {
<<<<<<< HEAD
                    return $user->getId();

                },
                
                
            ])
            ->add('fkIdPointderelais', EntityType::class, [
                'class' => Pointderelais::class,
                'choice_label' => 'idPointderelais',
            ]);
=======
                    return sprintf('%d - %s %s', $user->getId(), $user->getNom(), $user->getPrenom());
                },
            ])
        
          ->add('fkIdPointderelais', EntityType::class, [
            'class' => Pointderelais::class,
            'choice_label' => 'idPointderelais',
        ])
    ;
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
<<<<<<< HEAD
} 
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
