<?php

namespace Barif\ZradaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BarifZradaBundle:Default:index.html.twig', array('name' => '%username%'));
    }
}
