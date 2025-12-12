<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimateurController extends AbstractController
{
    #[Route('/animateur', name: 'app_animateur')]
    public function index(): Response
    {
        return $this->render('animateur/index.html.twig', [
            'controller_name' => 'AnimateurController',
        ]);
    }
}
