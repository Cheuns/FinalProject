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
            'controller_name' => 'WorksController',
            'works' => $works,
        ]);
    }

    /**
     * @Route("/user/{id}/{collection}", name="addmangas")
    */
    public function ajouterMangas(int $id, string $collection): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $id = $this->getDoctrine()
        ->getRepository(Works::class)
        ->find($id);

        $liste = $this->getUser()->getCollectionFavoris();
        
        foreach($liste as $collec){
            if($collec->getName() === $collection){
                
                $id->addCollectionfavori($collec);
                $entityManager->persist($collec);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('mangasAll');
    }
}