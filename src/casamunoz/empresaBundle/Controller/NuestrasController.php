<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Nuestras controller.
      *
      * @Route("/nuestras")
      */

class SomosController extends Controller
{
    
    /**
     * @Route("/", name="nuestras_index")
     * @Template("casamunozempresaBundle:nuestras:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Somos:index.html.twig');
    }
}


    
    



