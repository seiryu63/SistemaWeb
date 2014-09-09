<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use casamunoz\empresaBundle\Form\ClienteType;
use casamunoz\empresaBundle\Form\PersonaType;
use casamunoz\empresaBundle\Entity\Cliente;
use casamunoz\empresaBundle\Entity\Persona;


/**
 * Natural controller.
 *
 * @Route("/natural/new")
 */
class NaturalController extends Controller
{

/**
     * @Route("/", name="natural")
     * @Template("casamunozempresaBundle:Natural:new.html.twig")
     */
    public function newAction(Request $request)
    {
        $persona = new Persona();
        $cliente = new Cliente();
        $persona->setCliente($cliente);

        $form = $this->createForm(new NaturalType(), $persona);

        if ($request->isMethod("POST")) {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($persona);
                // $em->flush();

                $flashBag = $this->get('session')->getFlashBag();
                $flashBag->add('smtc_success', 'Se ha creado una persona:');
                
                return $this->redirect($this->generateUrl('natural_new'));
            }
        }

        return array(
            'form' => $form->createView()
        );
    }
 }
