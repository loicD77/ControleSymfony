<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RenduActivitésController extends AbstractController{
    #[Route('/rendu/activit/s', name: 'app_rendu_activit_s')]
    public function index(): Response
    {
        return $this->render('rendu_activités/index.html.twig', [
            'controller_name' => 'RenduActivitésController',
        ]);
    }
}
