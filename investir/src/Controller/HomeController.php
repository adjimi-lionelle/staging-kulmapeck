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

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
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

            $recipients = ['ondouabenoit392@gmail.com', 'autre@example.com', 'encore@example.org'];

            $email = (new Email())
                ->from('site@kulmapeck.com')
                ->to(...$recipients)
                ->subject('Nouveau message de contact')
                ->html($this->renderView('mail/contact_notification.html.twig', ['contactMessage' => $contactMessage]));

            $mailer->send($email);
            return $this->redirectToRoute('app_success', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/', name: 'app_default_route')]
    public function index1(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
