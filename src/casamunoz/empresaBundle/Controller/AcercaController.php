<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Acerca controller.
      *
      * @Route("/acerca")
      */

class AcercaController extends Controller
{
    
    /**
     * @Route("/", name="acerca_index")
     * @Template("casamunozempresaBundle:Acerca:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Acerca:index.html.twig');
    }
}

