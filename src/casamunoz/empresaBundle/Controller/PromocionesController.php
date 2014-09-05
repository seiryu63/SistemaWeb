<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Promociones controller.
      *
      * @Route("/promociones")
      */

class PromocionesController extends Controller
{
    
    /**
     * @Route("/", name="promociones_index")
     * @Template("casamunozempresaBundle:Promociones:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Promociones:index.html.twig');
    }
}

