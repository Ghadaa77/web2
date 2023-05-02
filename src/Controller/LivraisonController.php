<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Utils\AdresseFilter;
use GuzzleHttp\Client;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Writer\DataUriWriter;
use App\Entity\PdfGeneratorService;



use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/livraison')]
class LivraisonController extends AbstractController
{
    private $translator;
  
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    #[Route('/', name: 'app_livraison_index', methods: ['GET'])]
    public function index(LivraisonRepository $livraisonRepository , Request $request, PaginatorInterface $paginator): Response
    {
        $sortBy = $request->query->get('sortBy', 'dateLivraison');
        $adresseLivraison = $request->query->get('adresseLivraison');
        $etatLivraison = $request->query->get('etatLivraison');
    
        if ($adresseLivraison || $etatLivraison) {
            $livraisons = $livraisonRepository->searchByAdresseAndEtatLivraison(
                $adresseLivraison,
                $etatLivraison
            );
        } else {
            $livraisons = $livraisonRepository->findBy([], [$sortBy => 'ASC']);
        }
    
        // Utiliser le Paginator pour paginer les résultats
        $pagination = $paginator->paginate(
            $livraisons,
            $request->query->getInt('page', 1),
            10
        );
    
        return $this->render('livraison/index.html.twig', [
            'pagination' => $pagination,
            'livraisons' => $livraisons,
        ]);
    }



    #[Route('/new', name: 'app_livraison_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LivraisonRepository $livraisonRepository, EntityManagerInterface $entityManager): Response
{
    $livraison = new Livraison();
    $form = $this->createForm(LivraisonType::class, $livraison);
    $form->handleRequest($request);
   

    if ($form->isSubmitted() && $form->isValid()) {
        // Vérification de la date de livraison
        $today = new \DateTime();
        $dateLivraison = $livraison->getDateLivraison();
        
        if ($dateLivraison <= $today) {
            $livraison->setEtatLivraison('livree');
        } else {
            $livraison->setEtatLivraison('en cours');
        }

        $adresseFilter = new AdresseFilter(['alger', 'maroc', 'libie','mouritanie','egypt','france']);
        $livraisonRepository->save($livraison, true);

        $message = $livraison->getAdresseLivraison();
        if ($adresseFilter->hasBadword($message)) {
            return $this->redirectToRoute('app_livraison_index');
        } else {
            $entityManager->persist($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('livraison/new.html.twig', [
        'livraison' => $livraison,
        'form' => $form,
    ]);
}






#[Route('/{idLivraison}', name: 'app_livraison_show', methods: ['GET'])]
public function show(Livraison $livraison, Request $request, PaginatorInterface $paginator): Response
{
    // Utiliser le Paginator pour paginer les résultats
    $query = /* Ajouter ici la requête qui doit être paginée */;
    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        10
    );

    // Récupérer l'etat 
    $etatLivraison = $livraison->getEtatLivraison();

    // Appeler l'API de Google Translate pour traduire l'etat en anglais
    $client = new Client(); // Ajouter cette ligne
    $response = $client->post('https://translation.googleapis.com/language/translate/v2', [
        'form_params' => [
            'q' => [$etatLivraison],
            'target' => 'en',
            'format' => 'text',
            'source' => 'fr',
            'key' => 'votre-clé-d-api-google-translate', // Remplacer par votre clé d'API Google Translate
        ],
    ]);

    // Récupérer les traductions à partir de la réponse JSON
    $translations = json_decode((string) $response->getBody(), true)['data']['translations'];

    // Mettre à jour 
    $livraison->setEtatLivraison($translations[0]['translatedText']);

    // passer la pagination à la vue
    return $this->render('livraison/show.html.twig', [
        'livraison' => $livraison,
        'pagination' => $pagination,
    ]);
}


    #[Route('/{idLivraison}/edit', name: 'app_livraison_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Livraison $livraison, LivraisonRepository $livraisonRepository): Response
    {
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $livraisonRepository->save($livraison, true);

            return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('livraison/edit.html.twig', [
            'livraison' => $livraison,
            'form' => $form,
        ]);
    }

    #[Route('/{idLivraison}', name: 'app_livraison_delete', methods: ['POST'])]
    public function delete(Request $request, Livraison $livraison, LivraisonRepository $livraisonRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getIdLivraison(), $request->request->get('_token'))) {
            $livraisonRepository->remove($livraison, true);
        }

        return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
    }



 #[Route('/livred/{id}', name: 'livred', methods: ['GET'])]
public function LivredLivraison(Livraison $liv, EntityManagerInterface $entityManager): Response
{
    $today = new \DateTime();
    $dateLivraison = $liv->getDateLivraison();
    
    if ($dateLivraison <= $today) {
        $liv->setEtatLivraison(string::LIVRED);
        $entityManager->getRepository(Livraison::class)->save($liv, true);

        return $this->redirectToRoute('app_livraison_index');
    } else {
        // La date de livraison n'est pas encore passée
        // Vous pouvez ajouter un message flash pour informer l'utilisateur
        $this->addFlash('warning', 'La date de livraison n\'est pas encore passée.');
        return $this->redirectToRoute('app_livraison_index');
    }
}



#[Route('/pdf/livraison', name: 'generator_service')]


    public function pdfService(): Response
    { 
        $livraison= $this->getDoctrine()
        ->getRepository(Livraison::class)
        ->findAll();

   

        $html =$this->renderView('pdf/index.html.twig', ['livraison' => $livraison]);
        $pdfGeneratorService=new PdfGeneratorService();
        $pdf = $pdfGeneratorService->generatePdf($html);

        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="document.pdf"',
        ]);
       
    }

}
