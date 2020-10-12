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
            'page_title' => 'Nous créons des emplois et services de proximité en socialisant les travailleurs indépendants',
        ]);
    }
    
    /**
     * @Route("/entrepreneur-salarie-associe", name="esa")
     */
    public function esa()
    {
        return $this->render('front/esa.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'Entrepreneur salarié associé au sein d\'une coopérative d\'activité et d\'emploi',
        ]);
    }
    
    /**
     * @Route("/scic-sas", name="scic")
     */
    public function scic()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'L\'entreprise partagé : une SCIC SAS à capital variable',
        ]);
    }
    
    /**
     * @Route("/equipe-operationnelle", name="team")
     */
    public function team()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'titre',
        ]);
    }
    
    /**
     * @Route("/relais-locaux", name="local_groups")
     */
    public function local_groups()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'titre',
        ]);
    }
    
    /**
     * @Route("/partenaires", name="partners")
     */
    public function partners()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'titre',
        ]);
    }
    
    /**
     * @Route("/soutiens", name="supporters")
     */
    public function supporters()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'titre',
        ]);
    }
    
    /**
     * @Route("/eiti", name="eiti")
     */
    public function eiti()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => 'titre',
        ]);
    }
    
    /**
     * @Route("/mentions-legales", name="legacy")
     */
    public function legacy()
    {
        return $this->render('front/legacy.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => '',
        ]);
    }
    
    /**
     * @Route("/questions-frequentes", name="faq")
     */
    public function faq()
    {
        return $this->render('front/faq.html.twig', [
            'controller_name' => 'FrontController',
            'page_title' => '',
        ]);
    }
}
