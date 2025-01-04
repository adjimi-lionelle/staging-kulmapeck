<?php

namespace App\Controller;

use App\Entity\Investisseur;
use App\Form\InvestisseurType;
use App\Repository\InvestisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Email;



#[Route('/investisseur')]
class InvestisseurController extends AbstractController
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    #[Route('/', name: 'app_investisseur_index', methods: ['GET'])]
    public function index(InvestisseurRepository $investisseurRepository): Response
    {
        return $this->render('investisseur/index.html.twig', [
            'investisseurs' => $investisseurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_investisseur_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $investisseur = new Investisseur();
        $form = $this->createForm(InvestisseurType::class, $investisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($investisseur);
            $entityManager->flush();

            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('mail/declaration.html.twig', [
                'investisseur' => $investisseur
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $pdfOutput = $dompdf->output();
            $tmpFilename = tempnam(sys_get_temp_dir(), 'pdf');
            file_put_contents($tmpFilename, $pdfOutput);
            $title = 'Pre-enrolement-investisseur';

            $recipients = [
                'kenbalain@gmail.com',
                'bissayaivant@gmail.com',
                'ondouabenoit392@gmail.com',
                'investir@kulmapeck.com'
            ];
            try {
                foreach ($recipients as $mail) {
                    $email = (new TemplatedEmail())
                        ->from(new Address('investir@kulmapeck.com', 'Investir-Kulmapeck'))
                        ->to($mail)
                        ->subject($title)
                        ->htmlTemplate('mail/declaration.html.twig')
                        ->context([
                            'investisseur' => $investisseur,
                        ])
                        ->attachFromPath($tmpFilename, 'document-declaration.pdf', 'application/pdf');

                    $this->mailer->send($email);
                    // Call emailSender method for each recipient
                    $this->emailSender($investisseur, $mail, $mailer);
                }

                return $this->redirectToRoute('app_success', [], Response::HTTP_SEE_OTHER);
            } catch (TransportExceptionInterface $e) {
            }
        }
        $errors = $form->getErrors(true);
        if ($errors) {
            foreach ($errors as $error) {
                dump($error->getMessage());
            }
        }

        return $this->renderForm('investisseur/new.html.twig', [
            'investisseur' => $investisseur,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_investisseur_show', methods: ['GET'])]
    public function show(Investisseur $investisseur): Response
    {
        return $this->render('investisseur/show.html.twig', [
            'investisseur' => $investisseur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_investisseur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Investisseur $investisseur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InvestisseurType::class, $investisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_investisseur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('investisseur/edit.html.twig', [
            'investisseur' => $investisseur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_investisseur_delete', methods: ['POST'])]
    public function delete(Request $request, Investisseur $investisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $investisseur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($investisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_investisseur_index', [], Response::HTTP_SEE_OTHER);
    }


    public function emailSender(Investisseur $investisseur, $receiver, MailerInterface $mailer)
    {
        // Initialize email content with Investisseur details
        $emailContent = "<h1>Investisseur Details</h1>";

        // Get all properties of the Investisseur entity
        $reflectionClass = new \ReflectionClass($investisseur);
        $properties = $reflectionClass->getProperties();

        foreach ($properties as $property) {
            $propertyName = $property->getName();
            $propertyValue = $this->getPropertyValue($investisseur, $propertyName);

            // Check if the property value is a PersistentCollection
            if ($propertyValue instanceof \Doctrine\ORM\PersistentCollection) {
                // Skip PersistentCollection objects
                continue;
            }
            if ($propertyValue instanceof \DateTime) {
                $propertyValue = $propertyValue->format('Y-m-d H:i:s'); // Adjust format as needed
            }

            // Append property name and value to email content
            $emailContent .= "<p><strong>$propertyName:</strong> $propertyValue</p>";
        }

        $email = (new Email())
            ->from('no-reply@kulmapeck.com')
            ->to($receiver)
            ->subject("New invest")
            ->html($emailContent);

        // Send the email
        try {
            $mailer->send($email);
            // Email sent successfully
            return true;
        } catch (\Exception $e) {
            // Handle email sending failure
            return false;
        }
    }

    private function getPropertyValue(Investisseur $investisseur, string $propertyName)
    {
        $getter = 'get' . ucfirst($propertyName);
        $propertyValue = $investisseur->$getter();

        // Add logic to handle specific property types if needed

        return $propertyValue;
    }
    public function sendEmail(string $recipient, string $subject, string $body): void
    {
        $email = (new Email())
            ->from('investir@kulmapeck.com') // Replace with your email address
            ->to($recipient)
            ->subject($subject)
            ->text($body);

        $this->mailer->send($email);
    }
}
