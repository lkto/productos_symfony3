<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PruebaBundle:Default:index.html.twig');
    }

    public function nombreAction($nPila)
    {
        return $this->render('PruebaBundle:Default:nombre.html.twig', array('nPila' => $nPila ));
    }
}
