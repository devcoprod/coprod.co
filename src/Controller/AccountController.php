<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function personal_info(Request $request): Response
    {
        $title = "Informations personnelles";

        $user = $this->getUser();
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            // return $this->redirectToRoute('author_index');
        }

        return $this->render('account/personal_info.html.twig', [
            'controller_name' => 'AccountController',
            'page_title' => $title,
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/mon-compte/mot-de-passe", name="change_password")
     */
    public function change_password()
    {
        $title = "Mot de passe";
        return $this->render('account/change_password.html.twig', [
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
