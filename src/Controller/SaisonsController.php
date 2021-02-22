<?php

namespace App\Controller;

use App\Entity\Seasons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaisonsController extends AbstractController
{
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
            'seasons' => $seasons
        ]);
    }
}
