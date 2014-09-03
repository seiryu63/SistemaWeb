<?php

namespace casamunoz\empresaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use casamunoz\empresaBundle\Entity\Cubiculo;
use casamunoz\empresaBundle\Form\CubiculoType;

/**
 * Cubiculo controller.
 *
 * @Route("/cubiculo")
 */
class CubiculoController extends Controller
{

    /**
     * Lists all Cubiculo entities.
     *
     * @Route("/", name="cubiculo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('casamunozempresaBundle:Cubiculo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Cubiculo entity.
     *
     * @Route("/", name="cubiculo_create")
     * @Method("POST")
     * @Template("casamunozempresaBundle:Cubiculo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Cubiculo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cubiculo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Cubiculo entity.
     *
     * @param Cubiculo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cubiculo $entity)
    {
        $form = $this->createForm(new CubiculoType(), $entity, array(
            'action' => $this->generateUrl('cubiculo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cubiculo entity.
     *
     * @Route("/new", name="cubiculo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cubiculo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cubiculo entity.
     *
     * @Route("/{id}", name="cubiculo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:Cubiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cubiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cubiculo entity.
     *
     * @Route("/{id}/edit", name="cubiculo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:Cubiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cubiculo entity.');
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
    * Creates a form to edit a Cubiculo entity.
    *
    * @param Cubiculo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cubiculo $entity)
    {
        $form = $this->createForm(new CubiculoType(), $entity, array(
            'action' => $this->generateUrl('cubiculo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cubiculo entity.
     *
     * @Route("/{id}", name="cubiculo_update")
     * @Method("PUT")
     * @Template("casamunozempresaBundle:Cubiculo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('casamunozempresaBundle:Cubiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cubiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cubiculo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Cubiculo entity.
     *
     * @Route("/{id}", name="cubiculo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('casamunozempresaBundle:Cubiculo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cubiculo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cubiculo'));
    }

    /**
     * Creates a form to delete a Cubiculo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cubiculo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
