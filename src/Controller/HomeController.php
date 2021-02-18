<?php

namespace App\Controller;

use App\Entity\Works;
use App\Entity\Animes;
use App\Entity\Mangas;
use App\Entity\Seasons;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

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
            'controller_name' => 'HomeController',
            'animes' => $animes
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
            'controller_name' => 'HomeController',
            'animes' => $animes
        ]);
    }

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
            'controller_name' => 'HomeController',
            'mangas' => $mangas
        ]);
    }

    /**
    * @Route("/mangas/{id}", name="mangasId")
    */
    public function mangasId($id): Response 
    {
        $mangas = $this->getDoctrine()
        ->getRepository(Mangas::class)
        ->find($id);

        $user = $this->getUser();

        if(is_null($user)) {
            return $this->render('mangas/mangas_id.html.twig', [
                'mangas' => $mangas,
                'user' => $user,
            ]);
        }else{
            $collection = $user->getCollectionFavoris();

            return $this->render('mangas/mangas_id.html.twig', [
                'mangas' => $mangas,
                'collection' => $collection,
                'user' => $user,
            ]);
        }
    }

    /**
    * @Route("/saisons/all", name="saisonsAll")
    */
    public function saisonsAll(): Response
    {
        $seasons = $this->getDoctrine()
        ->getRepository(Seasons::class)
        ->findAll();
        dump($seasons);

        return $this->render('saisons/saisons_all.html.twig', [
            'controller_name' => 'HomeController',
            'seasons' => $seasons
        ]);
    }

    /**
    * @Route("/saisons/{id}", name="saisonsId")
    */
    public function saisonId($id): Response 
    {
        $seasons = $this->getDoctrine()
        ->getRepository(Seasons::class)
        ->find($id);
        dump($seasons);

        return $this->render('saisons/saisons_id.html.twig', [
            'controller_name' => 'HomeController',
            'seasons' => $seasons
        ]);
    }

    /**
    * @Route("/articles/all", name="articlesAll")
    */
    public function articlesAll(): Response
    {
        $articles = $this->getDoctrine()
        ->getRepository(News::class)
        ->findAll();
        dump($articles);

        return $this->render('articles/articles_all.html.twig', [
            'controller_name' => 'HomeController',
            'articles' => $articles
        ]);
    }

    /**
    * @Route("/articles/{id}", name="articlesId")
    */
    public function articlesId($id): Response 
    {
        $articles = $this->getDoctrine()
        ->getRepository(News::class)
        ->find($id);
        dump($articles);

        return $this->render('articles/articles_id.html.twig', [
            'controller_name' => 'HomeController',
            'articles' => $articles
        ]);
    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contact(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/apropos", name="apropos")
    */
    public function apropos(): Response
    {
        return $this->render('apropos/apropos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}