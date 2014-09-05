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

class NuestrasController extends Controller
{
    
    /**
     * @Route("/", name="nuestras_index")
     * @Template("casamunozempresaBundle:Nuestras:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Nuestras:index.html.twig');
    }
}


    
    



