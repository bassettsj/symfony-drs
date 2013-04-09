<?php

namespace Drs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name= "Digital Repository Service";
        return $this->render('DrsHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
