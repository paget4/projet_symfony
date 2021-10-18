<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\News;

class MPNewsController extends AbstractController
{
    #[Route('/news', name: 'news')]
    public function index(): Response
    {
        $repo=$this->getDoctrine()->getRepository(News::class);
        $articles=$repo->findAll();
        return $this->render('mp_news/news.html.twig', [
            'controller_name' => 'MPNewsController',
            'articles' => $articles,
        ]);
    }

    #[Route('/news/{id}', name: 'show')]
    public function show($id) {
        $repo=$this->getDoctrine()->getRepository(News::class);
        $article=$repo->find($id);

        return $this->render('mp_news/show.html.twig', [
            'controller_name' => 'show',
            'article' => $article,
        ]);
    }
}
