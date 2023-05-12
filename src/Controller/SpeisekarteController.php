<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpeisekarteController extends AbstractController
{
    #[Route('/speisekarte', name: 'app_speisekarte')]
    public function index(): Response
    {
        return $this->render('speisekarte/index.html.twig', [
            'controller_name' => 'SpeisekarteController',
        ]);
    }
}
