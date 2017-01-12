<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
   /**
   * @Route("/", name="home")
   * @Template("default/index.html.twig")
   */
    public function home(){
    // Init Doctrine
     $em = $this->getDoctrine();
     // on retourne notre table
        $nom = $em->getRepository("AppBundle:Name")->findAll();
        
       // retour info db dans variable 
      return array ('nom' => $nom);
      
        
    }
}
