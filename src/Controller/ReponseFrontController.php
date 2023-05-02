<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReponseFrontController extends AbstractController
{
    #[Route('/reponse/front', name: 'app_reponse_front')]
    public function index(): Response
    {
        return $this->render('reponse_front/index.html.twig', [
            'controller_name' => 'ReponseFrontController',
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
