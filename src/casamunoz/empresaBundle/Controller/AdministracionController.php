<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

      /**
      * Administracion controller.
      *
      * @Route("/administracion")
      */

class AdministracionController extends Controller
{
    
    /**
     * @Route("/", name="administracion_index")
     * @Template("casamunozempresaBundle:Administracion:index.html.twig")
     */
    
    public function indexAction()
    {
      
        
        
        return $this->render('casamunozempresaBundle:Administracion:index.html.twig');
    }
}

