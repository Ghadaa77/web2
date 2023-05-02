<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
=======
>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD

#[Route('/reclamation/front')]
class ReclamationFrontController extends AbstractController
{

    #[Route('/base', name: 'app_reclamation_new')]
    public function front(): Response
    {
        return $this->render('reclamation_front/front.html.twig', [
            'controller_name' => 'ReclamationFrontController',
        ]);
    }
    
    #[Route('/', name: 'app_reclamation_front_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation_front/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_front_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $reclamation = new Reclamation();
    $form = $this->createForm(ReclamationType::class, $reclamation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($reclamation);
        $entityManager->flush();
        $this->addFlash('success', 'Ajout avec succès');
        return $this->redirectToRoute("app_reclamation_front_show", ['idRec' => $reclamation->getIdRec()]);
    }

    return $this->renderForm('reclamation_front/new.html.twig', [
        'reclamation' => $reclamation,
        'form' => $form,
    ]);
}

    

    #[Route('/{idRec}', name: 'app_reclamation_front_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation_front/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idRec}/edit', name: 'app_reclamation_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_front/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idRec}', name: 'app_reclamation_front_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdRec(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_front_index', [], Response::HTTP_SEE_OTHER);
    }

    
=======
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;

class ReclamationFrontController extends AbstractController
{
    #[Route('/reclamation/front', name: 'app_reclamation_front')]
    public function index(Request $request): Response
    {
        $reclamation = new Reclamation();

        $form = $this->createForm(ReclamationType::class, $reclamation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Your reclamation has been submitted successfully.');

            return $this->redirectToRoute('app_reclamation_front');
        }

        return $this->render('reclamation_front/rec.html.twig', [
            'form' => $form->createView(),
        ]);
    }

>>>>>>> 8e2d5ae6251d16e7cfd86071e560d1d445a48627

}
