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
        return $this->render('produits/produits.html.twig');
    }

    /**
     * @Route("/produit", name="app_produit")
     */
    public function produit()
    {
        return $this->render('produits/produit_one.html.twig');
    }

    /**
     * @Route("/panier", name="app_panier")
     */
    public function panier()
    {
        return $this->render('panier/panier.html.twig');
    }
}
