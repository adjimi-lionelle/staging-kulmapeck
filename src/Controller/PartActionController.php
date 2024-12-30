<?php

namespace App\Controller;

use App\Entity\PartAction;
use App\Form\PartActionType;
use App\Repository\PartActionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/part/action')]
class PartActionController extends AbstractController
{
    #[Route('/', name: 'app_part_action_index', methods: ['GET'])]
    public function index(PartActionRepository $partActionRepository): Response
    {
        return $this->render('part_action/index.html.twig', [
            'part_actions' => $partActionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_part_action_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $partAction = new PartAction();
        $form = $this->createForm(PartActionType::class, $partAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($partAction);
            $entityManager->flush();

            return $this->redirectToRoute('app_part_action_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('part_action/new.html.twig', [
            'part_action' => $partAction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_part_action_show', methods: ['GET'])]
    public function show(PartAction $partAction): Response
    {
        return $this->render('part_action/show.html.twig', [
            'part_action' => $partAction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_part_action_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PartAction $partAction, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PartActionType::class, $partAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_part_action_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('part_action/edit.html.twig', [
            'part_action' => $partAction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_part_action_delete', methods: ['POST'])]
    public function delete(Request $request, PartAction $partAction, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partAction->getId(), $request->request->get('_token'))) {
            $entityManager->remove($partAction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_part_action_index', [], Response::HTTP_SEE_OTHER);
    }
}
