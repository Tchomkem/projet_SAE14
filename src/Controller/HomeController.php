<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
	/**
     * @Route("/actu", name="actu")
     */
    public function actu(): Response
    {
        return $this->render('home/actu.html.twig', [
            'controller_name' => 'salut',
        ]);
    }
	/**
     * @Route("/loisires", name="loisires")
     */
    public function loisires(): Response
    {
        return $this->render('home/loisires.html.twig', [
            'controller_name' => 'salut',
        ]);
    }
	/**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('home/cv.html.twig', [
            'controller_name' => 'coucou',
        ]);
    }
}
