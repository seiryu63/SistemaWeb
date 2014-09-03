<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use casamunoz\empresaBundle\Entity\CargoEmpleado;
use casamunoz\empresaBundle\Form\CargoEmpleadoType;

/**
 * CargoEmpleado controller.
 *
 * @Route("/cargoempleado")
 */
class CargoEmpleadoController extends Controller
{

    /**
     * Lists all CargoEmpleado entities.
     *
     * @Route("/", name="cargoempleado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('casamunozempresaBundle:CargoEmpleado')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CargoEmpleado entity.
     *
     * @Route("/", name="cargoempleado_create")
     * @Method("POST")
     * @Template("casamunozempresaBundle:CargoEmpleado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CargoEmpleado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cargoempleado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a CargoEmpleado entity.
     *
     * @param CargoEmpleado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CargoEmpleado $entity)
    {
        $form = $this->createForm(new CargoEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('cargoempleado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CargoEmpleado entity.
     *
     * @Route("/new", name="cargoempleado_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CargoEmpleado();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CargoEmpleado entity.
     *
     * @Route("/{id}", name="cargoempleado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:CargoEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CargoEmpleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CargoEmpleado entity.
     *
     * @Route("/{id}/edit", name="cargoempleado_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:CargoEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CargoEmpleado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a CargoEmpleado entity.
    *
    * @param CargoEmpleado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CargoEmpleado $entity)
    {
        $form = $this->createForm(new CargoEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('cargoempleado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CargoEmpleado entity.
     *
     * @Route("/{id}", name="cargoempleado_update")
     * @Method("PUT")
     * @Template("casamunozempresaBundle:CargoEmpleado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:CargoEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CargoEmpleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cargoempleado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CargoEmpleado entity.
     *
     * @Route("/{id}", name="cargoempleado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('casamunozempresaBundle:CargoEmpleado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CargoEmpleado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cargoempleado'));
    }

    /**
     * Creates a form to delete a CargoEmpleado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cargoempleado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
