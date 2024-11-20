<?php

namespace App\Controller;

use App\Entity\UserGuard;
use App\Form\UserGuardType;
use App\Repository\UserGuardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user/guard')]
final class UserGuardController extends AbstractController
{
    #[Route(name: 'app_user_guard_index', methods: ['GET'])]
    public function index(UserGuardRepository $userGuardRepository): Response
    {
        return $this->render('user_guard/index.html.twig', [
            'user_guards' => $userGuardRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_guard_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userGuard = new UserGuard();
        $form = $this->createForm(UserGuardType::class, $userGuard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($userGuard);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_guard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_guard/new.html.twig', [
            'user_guard' => $userGuard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_guard_show', methods: ['GET'])]
    public function show(UserGuard $userGuard): Response
    {
        return $this->render('user_guard/show.html.twig', [
            'user_guard' => $userGuard,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_guard_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, UserGuard $userGuard, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserGuardType::class, $userGuard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_guard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_guard/edit.html.twig', [
            'user_guard' => $userGuard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_guard_delete', methods: ['POST'])]
    public function delete(Request $request, UserGuard $userGuard, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userGuard->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($userGuard);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_guard_index', [], Response::HTTP_SEE_OTHER);
    }
}
