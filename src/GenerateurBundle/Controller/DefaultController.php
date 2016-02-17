<?php

namespace GenerateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $pages=$this->getDoctrine()->getRepository('GenerateurBundle:Page')->findAll();

        return $this->render('GenerateurBundle:Default:index.html.twig', array(
            'pages'=>$pages
        ));
    }

}
