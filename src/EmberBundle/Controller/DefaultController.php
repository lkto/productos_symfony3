<?php

namespace EmberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
   

    /**
     * @Route("/nombre", name="ember_nombre")
     */
    public function nombreAction()
    {
        return $this->render('EmberBundle:Default:nombre.html.twig');
    }

    /**
     * @Route("/redireccion")
     */
    public function redireccionAction()
    {
        return $this->render('EmberBundle:Default:redireccion.html.twig');
    }
}
