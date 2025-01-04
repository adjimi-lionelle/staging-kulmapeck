<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(
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
}
