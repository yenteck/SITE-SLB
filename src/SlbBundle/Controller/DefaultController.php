<?php

namespace SlbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SlbBundle:Default:index.html.twig');
    }
}
