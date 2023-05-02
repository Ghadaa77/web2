<?php

namespace App\Controller;
<<<<<<< HEAD
use App\Repository\CommandeRepository;
use App\Entity\Commande;
=======

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
<<<<<<< HEAD
    
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
=======
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
        ]);
    }
}
