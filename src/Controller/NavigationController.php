<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        return $this->render('navigation/index.html.twig');
    }
    /**
     * @Route("/annee/2018/asia/assainissement", name="assainissement_asia")
     */
    public function assainissement_asia()
    {

        return $this->render('navigation/assainissement-asia.html.twig');
    }
    /**
     * @Route("/annee/2018/afrique/assainissement", name="assainissement_asia")
     */
    public function assainissement_africa()
    {

        return $this->render('navigation/assainissement-africa.html.twig');
    }
}
