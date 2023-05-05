<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/order_By_Nom', name: 'order_By_Nom', methods: ['GET'])]
    public function order_By_Nom(Request $request,UserRepository $userRepository): Response
    {

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->orderByNom(),
        ]);

    }



    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

  

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    
    

    //#[Route('/search', name: 'search')]
    //      public function searchUser(Request $request, NormalizerInterface $Normalizer,UserRepository $sr)
    //      {
    //          $repository = $this->getDoctrine()->getRepository(User::class);
    //          $requestString = $request->get('searchValue');
    //          $Users = $repository->findUserByNom($requestString);
    //          $jsonContent = $Normalizer->normalize($Users, 'json', ['groups' => 'users']);
    //          $retour = json_encode($jsonContent);
    //          return new Response($retour);
        
    // }
    ///////////////////////////////////////////////////////////

#[Route('Front/{id}', name: 'app_user_showFront', methods: ['GET'])]
public function showFront(User $user): Response
{
    return $this->render('user/showFront.html.twig', [
        'user' => $user,
    ]);
}

#[Route('/{id}/editFront', name: 'app_user_editFront', methods: ['GET', 'POST'])]
    public function editFront(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

          
        }

        return $this->renderForm('user/editFront.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

  
}
