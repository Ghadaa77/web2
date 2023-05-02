<?php

namespace App\Repository;

use App\Entity\Livraison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Livraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livraison[]    findAll()
 * @method Livraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livraison::class);
    }
    
    public function save(Livraison $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Livraison $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    

    public function searchByAdresseAndEtatLivraison($adresseLivraison = null, $etatLivraison = null)
{
    $queryBuilder = $this->createQueryBuilder('a');

    if ($adresseLivraison) {
        $queryBuilder->andWhere('a.adresseLivraison LIKE :adresseLivraison')
            ->setParameter('adresseLivraison', '%'.$adresseLivraison.'%');
    }

    if ($etatLivraison) {
        $queryBuilder->andWhere('a.etatLivraison = :etatLivraison')
            ->setParameter('etatLivraison', $etatLivraison);
    }

    $queryBuilder->orderBy('a.dateLivraison', 'ASC');

    $query = $queryBuilder->getQuery();
    return $query->getResult();
}



<<<<<<< HEAD
}
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
