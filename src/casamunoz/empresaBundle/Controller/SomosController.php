<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Somos controller.
      *
      * @Route("/somos")
      */

class SomosController extends Controller
{
    
    /**
     * @Route("/", name="somos_index")
     * @Template("casamunozempresaBundle:Somos:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Somos:index.html.twig');
    }
}


    
    

