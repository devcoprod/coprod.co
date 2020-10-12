<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/mon-compte", name="dashboard")
     */
    public function index()
    {
        $title = "Tableau de bord";
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'page_title' => 'Tableau de bord',
        ]);
    }
    
    /**
     * @Route("/mon-compte/mes-infos", name="personal_info")
     */
    public function personal_info()
    {
        $title = "Informations personnelles";
        return $this->render('account/personal_info.html.twig', [
            'controller_name' => 'AccountController',
            'page_title' => 'Informations personnelles',
        ]);
    }
    
    /**
     * @Route("/mon-compte/mot-de-passe", name="change_password")
     */
    public function change_password()
    {
        $title = "Mot de passe";
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'page_title' => 'Modification du mot de passe',
        ]);
    }
    
    /**
     * @Route("/mon-compte/parametres", name="my_settings")
     */
    public function my_settings()
    {
        $title = "Paramètres";
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'page_title' => 'Paramètres du compte',
        ]);
    }
}
