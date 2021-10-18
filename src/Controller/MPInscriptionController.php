<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use Doctrine\Common\Persistence\ObjectManager;

class MPInscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function index(Request $request): Response
    {   
        return $this->render('mp_inscription/inscription.html.twig', [
            'controller_name' => 'MPInscriptionController',
        ]);
    }

    public function create(Request $request, ObjectManager $manager) {
        $user=new Users();
        if($request->request->count() > 0)
        {
            $user->setId(1)
            ->setNom($request->request->get('nom'))
            ->setPrenom($request->request->get('prenom'))
            ->setEmail($request->request->get('email'));

            manager->persist($user);
            manager->flush();
        }
    }
}
