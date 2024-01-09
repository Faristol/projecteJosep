<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciController extends AbstractController
{
    #[Route('/inici', name: 'inici')]
    public function inici(): Response
    {
        return $this->render('inici/index.html.twig');
    }
}