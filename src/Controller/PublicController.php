<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index()
    {
        return $this->render('public/index.html.twig');
    }

    /**
     * @Route("/produits", name="app_produits")
     */
    public function produits()
    {
        return $this->render('public/index.html.twig');
    }

    /**
     * @Route("/produit", name="app_produit")
     */
    public function produit()
    {
        return $this->render('public/index.html.twig');
    }
}
