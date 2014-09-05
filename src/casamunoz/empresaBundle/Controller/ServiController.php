<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Servi controller.
      *
      * @Route("/servi")
      */

class ServiController extends Controller
{
    
    /**
     * @Route("/", name="servi_index")
     * @Template("casamunozempresaBundle:Servi:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Servi:index.html.twig');
    }
}

