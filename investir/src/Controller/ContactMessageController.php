<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
use App\Repository\ContactMessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/contact/message')]
class ContactMessageController extends AbstractController
{
    #[Route('/', name: 'app_contact_message_index', methods: ['GET'])]
    public function index(ContactMessageRepository $contactMessageRepository): Response
    {
        return $this->render('contact_message/index.html.twig', [
            'contact_messages' => $contactMessageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_contact_message_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $contactMessage = new ContactMessage();
        $form = $this->createForm(ContactMessageType::class, $contactMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contactMessage);
            $entityManager->flush();

            $recipients = [
                'patmbantio@gmail.com',
                'kenbalain@gmail.com',
                'bissayaivant@gmail.com',
                'patchallenger01@gmail.com',
                'ondouabenoit392@gmail.com',
                'contact@kulmapeck.com'
            ];
            $email = (new Email())
                ->from('contact-investir@kulmapeck.com')
                ->to(...$recipients)
                ->subject('Contact-Investir Du site Investir')
                ->html($this->renderView('mail/contact_notification.html.twig', ['contactMessage' => $contactMessage]));

            $mailer->send($email);
            return $this->redirectToRoute('app_success', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_contact_message_show', methods: ['GET'])]
    public function show(ContactMessage $contactMessage): Response
    {
        return $this->render('contact_message/show.html.twig', [
            'contact_message' => $contactMessage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contact_message_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ContactMessage $contactMessage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactMessageType::class, $contactMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_contact_message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contact_message/edit.html.twig', [
            'contact_message' => $contactMessage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contact_message_delete', methods: ['POST'])]
    public function delete(Request $request, ContactMessage $contactMessage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $contactMessage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($contactMessage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_contact_message_index', [], Response::HTTP_SEE_OTHER);
    }
}
