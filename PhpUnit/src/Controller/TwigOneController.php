<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigOneController extends AbstractController
{
    /**
     * @Route("/twig/one", name="twig_one")
     */
    public function index(): Response
    {
        return $this->render('twig_one/index.html.twig', [
            'controller_name' => 'TwigOneController',
        ]);
    }
}
