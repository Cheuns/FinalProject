<?php

namespace App\Controller;

use App\Entity\Animes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimesController extends AbstractController
{
    /**
    * @Route("/animes/all", name="animesAll")
    */
    public function animesAll(): Response
    {
        $animes = $this->getDoctrine()
        ->getRepository(Animes::class)
        ->findAll();
        dump($animes);
        
        return $this->render('animes/animes_all.html.twig', [
            'animes' => $animes,
        ]);
    }

    /**
    * @Route("/animes/{id}", name="animesId")
    */
    public function animesId($id): Response 
    {
        $animes = $this->getDoctrine()
        ->getRepository(Animes::class)
        ->find($id);
        dump($animes);

        return $this->render('animes/animes_id.html.twig', [
            'animes' => $animes
        ]);
    }
}