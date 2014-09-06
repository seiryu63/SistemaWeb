<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/",name="casamunozempresa_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
