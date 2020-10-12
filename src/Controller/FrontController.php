<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'Créer des emplois et services de proximité en socialisant les travailleurs indépendants',
        ]);
    }
    
    /**
     * @Route("/mentions-legales", name="legacy")
     */
    public function legacy()
    {
        return $this->render('front/legacy.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    
    /**
     * @Route("/questions-frequentes", name="faq")
     */
    public function faq()
    {
        return $this->render('front/faq.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
