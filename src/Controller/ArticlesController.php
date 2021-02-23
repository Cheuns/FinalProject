<?php

namespace App\Controller;

use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
class ArticlesController extends AbstractController
{
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
            'news' => $articles
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
            'news' => $articles
        ]);
    }
}
