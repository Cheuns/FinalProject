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

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
    */
    public function user(): Response
    {
        $works = $this->getDoctrine()
        ->getRepository(Works::class)
        ->findAll();
        dump($works);

        $user = $this->getUser();
        $collection = $user->getCollectionFavoris();

        return $this->render('user/user.html.twig', [
            'works' => $works, 
            'user' => $user, 
            'collection' => $collection, 
        ]);
    }

    /**
     * @Route("/user/collection/{id}", name="collection")
    */
    public function collection($id): Response
    {
        $collec = $this->getDoctrine()
        ->getRepository(CollectionFavoris::class)
        ->find($id);

        $user = $this->getUser();
        $works = $collec->getRelationWorks();

        return $this->render('user/collection.html.twig', [
            'works' => $works, 
            'user' => $user, 
        ]);
    }
}