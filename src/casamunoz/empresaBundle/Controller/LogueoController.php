<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

 /**
      * Logueo controller.
      *
      * @Route("/logueo")
      */
    

class LogueoController extends Controller
{
   
    /**
     * @Route("/", name="logueo_index")
     * @Template("casamunozempresaBundle:Logueo:index.html.twig")
     */
    
    
     public function indexAction()
    {
        return $this->render('casamunozempresaBundle:Logueo:index.html.twig');
    }
}

