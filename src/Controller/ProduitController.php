<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
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