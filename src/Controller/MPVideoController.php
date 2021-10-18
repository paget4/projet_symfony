<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MPVideoController extends AbstractController
{
    #[Route('/video', name: 'video')]
    public function index(): Response
    {
        return $this->render('mp_video/video.html.twig', [
            'controller_name' => 'MPVideoController',
        ]);
    }
}
