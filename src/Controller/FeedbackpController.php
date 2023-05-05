<?php

namespace App\Controller;

use App\Entity\Feedbackp;
use App\Form\FeedbackpType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\FeedbackpRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/feedbackp')]
class FeedbackpController extends AbstractController
{
    #[Route('/', name: 'app_feedbackp_index', methods: ['GET'])]
    public function index(FeedbackpRepository $feedbackpRepository): Response
    {
        return $this->render('feedbackp/index.html.twig', [
            'feedbackps' => $feedbackpRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_feedbackp_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FeedbackpRepository $feedbackpRepository): Response
    {
        $feedbackp = new Feedbackp();
        $form = $this->createForm(FeedbackpType::class, $feedbackp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $feedbackpRepository->save($feedbackp, true);

            return $this->redirectToRoute('app_feedbackp_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('feedbackp/new.html.twig', [
            'feedbackp' => $feedbackp,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_feedbackp_show', methods: ['GET'])]
    public function show(Feedbackp $feedbackp): Response
    {
        return $this->render('feedbackp/show.html.twig', [
            'feedbackp' => $feedbackp,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_feedbackp_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Feedbackp $feedbackp, FeedbackpRepository $feedbackpRepository): Response
    {
        $form = $this->createForm(FeedbackpType::class, $feedbackp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $feedbackpRepository->save($feedbackp, true);

            return $this->redirectToRoute('app_feedbackp_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('feedbackp/edit.html.twig', [
            'feedbackp' => $feedbackp,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_feedbackp_delete', methods: ['POST'])]
    public function delete(Request $request, Feedbackp $feedbackp, FeedbackpRepository $feedbackpRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feedbackp->getId(), $request->request->get('_token'))) {
            $feedbackpRepository->remove($feedbackp, true);
        }

        return $this->redirectToRoute('app_feedbackp_index', [], Response::HTTP_SEE_OTHER);
    }
    //////////////////////////////////////////////
    

    #[Route('Front', name: 'app_feedbackp_indexFront', methods: ['GET'])]
    public function indexFront(EntityManagerInterface $entityManager): Response
    {
        $feedbackps = $entityManager
            ->getRepository(Feedbackp::class)
            ->findAll();

        return $this->render('feedbackp/indexFront.html.twig', [
            'feedbackps' => $feedbackps,
        ]);
    }

    #[Route('Front/new', name: 'app_feedbackp_newFront', methods: ['GET', 'POST'])]
    public function newFront(Request $request, EntityManagerInterface $entityManager): Response
    {
        $feedbackp = new Feedbackp();
        $form = $this->createForm(FeedbackpType::class, $feedbackp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($feedbackp);
            $entityManager->flush();

            return $this->redirectToRoute('app_feedbackp_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('feedbackp/newFront.html.twig', [
            'feedbackp' => $feedbackp,
            'form' => $form,
        ]);
    }

    #[Route('Front/{id}', name: 'app_feedbackp_showFront', methods: ['GET'])]
    public function showFront(Feedbackp $feedbackp): Response
    {
        return $this->render('feedbackp/showFront.html.twig', [
            'feedbackp' => $feedbackp,
        ]);
    }

    #[Route('Front/{id}/edit', name: 'app_feedbackp_editFront', methods: ['GET', 'POST'])]
    public function editFront(Request $request, Feedbackp $feedbackp, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FeedbackpType::class, $feedbackp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_feedbackp_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('feedbackp/editFront.html.twig', [
            'feedbackp' => $feedbackp,
            'form' => $form,
        ]);
    }

    #[Route('Front/{id}', name: 'app_feedbackp_deleteFront', methods: ['POST'])]
    public function deleteFront(Request $request, Feedbackp $feedbackp, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feedbackp->getId(), $request->request->get('_token'))) {
            $entityManager->remove($feedbackp);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_feedbackp_indexFront', [], Response::HTTP_SEE_OTHER);
    }
}
