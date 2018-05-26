<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 15/05/2018
 * Time: 23:58
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController
{

    /**
     * @Route("/sidebarRight")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sidebarRight(Environment $twig){
        return new Response($twig->render('pages/sidebar-right.html.twig'));
    }

}