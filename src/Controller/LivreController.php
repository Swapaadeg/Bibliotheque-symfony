<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivreController extends AbstractController
{
    #[Route('/livre', name: 'livre')]
    public function index(): Response
    {
        return $this->render('livre/livre.html.twig', [
            'controller_name' => 'LivreController',
        ]);
    }
}
