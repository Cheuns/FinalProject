<?php

namespace App\Controller;

use App\Entity\Mangas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MangasController extends AbstractController
{
   /**
    * @Route("/mangas/all", name="mangasAll")
    */
    public function mangasAll(): Response
    {
        $mangas = $this->getDoctrine()
        ->getRepository(Mangas::class)
        ->findAll();
        dump($mangas);

        return $this->render('mangas/mangas_all.html.twig', [
            'mangas' => $mangas
        ]);
    }

    /**
    * @Route("/mangas/{id}", name="mangasId")
    */
    public function mangasanimesId($id): Response 
    {
        $mangas = $this->getDoctrine()
        ->getRepository(Mangas::class)
        ->find($id);
        dump($mangas);

        return $this->render('mangas/mangas_id.html.twig', [
            'mangas' => $mangas
        ]);
    }
}