<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produit/front')]
class ProduitFrontController extends AbstractController
{
    #[Route('/', name: 'app_produit_front_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit_front/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    #[Route('/home', name: 'app_produit_index', methods: ['GET'])]
    public function indexhome(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit_front/home.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_produit_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProduitRepository $produitRepository): Response
    {
        
        ////////////////////////////////
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();
            $imageFile = $form->get('image')->getData();
            
            // génération d'un nom de fichier unique
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // déplacement du fichier dans le dossier public/images
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );

            // mise à jour de l'attribut "image" de l'objet véhicule
            $produit->setImage($newFilename);
            $produitRepository->save($produit, true);

            return $this->redirectToRoute('app_produit_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit_front/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idProduit}', name: 'app_produit_front_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit_front/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{idProduit}/edit', name: 'app_produit_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, ProduitRepository $produitRepository): Response
    {
        $form = $this->createForm(Produit1Type::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produitRepository->save($produit, true);

            return $this->redirectToRoute('app_produit_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit_front/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
        /////////////////////////////////////////////////
        //$produit=new Produit;
       // $form = $this->createForm(ProduitType::class, $produit);
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
        //    $file = $form['image']->getData();
        //    $imageFile = $form->get('image')->getData();
            
        //    // génération d'un nom de fichier unique
        //    $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // déplacement du fichier dans le dossier public/images
        //    $imageFile->move(
        //        $this->getParameter('images_directory'),
         //       $newFilename
        //    );

            // mise à jour de l'attribut "image" de l'objet
        //    $produit->setImage($newFilename);
        //    $produitRepository->save($produit, true);

         //   return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
       // }

        return $this->renderForm('produit_front/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idProduit}', name: 'app_produit_front_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, ProduitRepository $produitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getIdProduit(), $request->request->get('_token'))) {
            $produitRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produit_front_index', [], Response::HTTP_SEE_OTHER);
    }
}