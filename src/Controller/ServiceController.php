<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Categorie;
use App\Service\BadWordsService;

#[Route('/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'app_service_index', methods: ['GET'])]
    public function index(ServiceRepository $serviceRepository,EntityManagerInterface $entityManager , Request $request, PaginatorInterface $paginator, ?Categorie $categorie = null): Response
    {

        $queryBuilder = $entityManager->getRepository(Service::class)->createQueryBuilder('r');
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1), // Default page number
            3// Items per page
        );


        return $this->render('service/index.html.twig', [
            'services' => $pagination,
        ]);
    }


    ////////////////////////////////
    #[Route('/pdf', name: 'app_pdf', methods: ['GET'])]
      public function pdf(EntityManagerInterface $entityManager)
      {
          // Configure Dompdf according to your needs
          $pdfOptions = new Options();
          $pdfOptions->set('defaultFont', 'Arial');
  
          // Instantiate Dompdf with our options
          $dompdf = new Dompdf($pdfOptions);
          // Retrieve the HTML generated in our twig file
          $html = $this->renderView('service/pdf.html.twig', [
              'services' => $services = $entityManager->getRepository(Service::class)->findAll(),
          ]);
  
          // Load HTML to Dompdf
          $dompdf->loadHtml($html);
          // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
          $dompdf->setPaper('A4', 'portrait');
  
          // Render the HTML as PDF
          $dompdf->render();
          // Output the generated PDF to Browser (inline view)
          $dompdf->stream("ListeDesServices.pdf", [
              "services" => true
          ]);
        }


        ///////////////////////////////////////
    #[Route('/new', name: 'app_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager , BadWordsService $badWordsService): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentText = $service->getDescriptionService();
            $containsBadWords = $badWordsService->containsBadWords($commentText);
            if ($containsBadWords) {
                // If the comment contains bad words, show an error message
                $this->addFlash('error', 'Your description contains bad words!');
            } else {
            $entityManager->persist($service);
            $entityManager->flush();
            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }
           
        }

        return $this->renderForm('service/new.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

        

    #[Route('/{id}', name: 'app_service_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        return $this->render('service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviceRepository->save($service, true);

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $serviceRepository->remove($service, true);
        }

        return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
    }

    ////////////////////////////////////
    #[Route('Front/', name: 'app_service_indexFront', methods: ['GET'])]
    public function indexFront(ServiceRepository $serviceRepository,EntityManagerInterface $entityManager , Request $request, PaginatorInterface $paginator, ?Categorie $categorie = null): Response
    {

        $queryBuilder = $entityManager->getRepository(Service::class)->createQueryBuilder('r');
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1), // Default page number
            3// Items per page
        );


        return $this->render('service/indexFront.html.twig', [
            'services' => $pagination,
        ]);
    }

    #[Route('Front/new', name: 'app_service_newFront', methods: ['GET', 'POST'])]
    public function newFront(Request $request, EntityManagerInterface $entityManager , BadWordsService $badWordsService): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentText = $service->getDescriptionService();
            $containsBadWords = $badWordsService->containsBadWords($commentText);
            if ($containsBadWords) {
                // If the comment contains bad words, show an error message
                $this->addFlash('error', 'Your description contains bad words!');
            } else {
            $entityManager->persist($service);
            $entityManager->flush();
            return $this->redirectToRoute('app_service_indexFront', [], Response::HTTP_SEE_OTHER);
        }
           
        }

        return $this->renderForm('service/newFront.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('Front/{id}', name: 'app_service_showFront', methods: ['GET'])]
    public function showFront(Service $service): Response
    {
        return $this->render('service/showFront.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('Front/{id}/edit', name: 'app_service_editFront', methods: ['GET', 'POST'])]
    public function editFront(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviceRepository->save($service, true);

            return $this->redirectToRoute('app_service_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/editFront.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('Front/{id}', name: 'app_service_deleteFront', methods: ['POST'])]
    public function deleteFront(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $serviceRepository->remove($service, true);
        }

        return $this->redirectToRoute('app_service_indexFront', [], Response::HTTP_SEE_OTHER);
    }

}
