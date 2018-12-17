<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    /**
     * @Route("/", name="navigation")
     */
    public function index()
    {

        return $this->render('navigation/index.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
}
