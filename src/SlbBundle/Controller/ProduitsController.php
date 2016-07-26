<?php

namespace SlbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function milAction()
    {
        return $this->render("SlbBundle:Produits:mil.html.twig");
    }
}
