<?php

namespace App\Controller;
<<<<<<< HEAD
use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
<<<<<<< HEAD
    #[Route('/produit', name: 'app_produit', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    

    //#[Route('/', name: 'app_produitindex', methods: ['GET'])]
    //public function indexback(ProduitRepository $produitRepository): Response
    //{
    //    return $this->render('produit_front/indexback.html.twig', [
    //        'produits' => $produitRepository->findAll(),
     //   ]);
   // }
}
=======
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
