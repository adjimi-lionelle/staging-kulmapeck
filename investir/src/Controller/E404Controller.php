<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class E404Controller extends AbstractController
{
    #[Route('/404', name: 'app_e404')]
    public function index(): Response
    {
        return $this->render('e404/index.html.twig', [
            'controller_name' => 'Not found',
        ]);
    }
}
