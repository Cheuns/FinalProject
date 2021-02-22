<?php

namespace App\Controller;

use App\Entity\Works;
use App\Entity\Animes;
use App\Entity\Mangas;
use App\Entity\Seasons;
use App\Entity\News;
use App\Entity\CollectionFavoris;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorksController extends AbstractController
{
    /**
     * @Route("/works", name="works")
    */
    public function index(): Response
    {
        $works = $this->getDoctrine()
        ->getRepository(Works::class)
        ->findAll();
        dump($works);

        return $this->render('works/works.html.twig', [
            'works' => $works,
        ]);
    }

    /**
     * @Route("/user/{id}/{collection}", name="addmangas")
    */
    public function ajouterMangas(int $id, string $collection): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $works = $this->getDoctrine()
        ->getRepository(Works::class)
        ->find($id);

        $collection = $this->getDoctrine()
        ->getRepository(CollectionFavoris::class)
        ->findOneBy(['name'=> $collection]);

        $collection->addRelationWork($works);   
        $entityManager->persist($collection);
        $entityManager->flush();
    
        return $this->redirectToRoute('home');
    }
}