<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WochenkarteController extends AbstractController
{
    #[Route('/wochenkarte', name: 'app_wochenkarte')]
    public function index(): Response
    {
        return $this->render('wochenkarte/index.html.twig', [
            'controller_name' => 'WochenkarteController',
        ]);
    }
}
