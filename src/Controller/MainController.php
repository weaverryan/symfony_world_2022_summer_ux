<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig');
    }

    #[Route('/components')]
    public function components(): Response
    {
        $components = [
            'Turbo' => 'purple',
            'Live Components' => 'red',
            'Chart.js' => 'green',
            'Typed' => 'yellow',
            'Cropper.js' => 'blue',
            'Dropzone' => 'magenta',
            'Autocomplete' => 'purple',
            'Twig Components' => 'red',
        ];

        return $this->render('main/components.html.twig', [
            'components' => $components,
        ]);
    }
}
