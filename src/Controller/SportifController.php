<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class SportifController extends AbstractController
{
    #[IsGranted('ROLE_SPORTIF')]
    #[Route('/sportif', name: 'app_sportif')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();

        return $this->render('sportif/index.html.twig', [
            'user' => $user,
            'objectifs' => $user->getObjectifs(),
        ]);
    }
}
