<?php

namespace casamunoz\empresaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use casamunoz\empresaBundle\Entity\FosUserUser;
use Symfony\Component\Security\Core\User\UserInterface;

class LoginController extends Controller
{
	 public function indexAction(Request $request)
    {
		$session = new Session();
		$session=$this->getRequest()->getSession();
		$session->start();
		$repository=$this->getDoctrine();
		$user = new FosUserUser();
		$form = $this->createFormBuilder($user,  array('method' => $request->getMethod()))
                        
                        ->add('username', 'text', array('attr' => array('title'=>'Este campo no puede estar vacio. ')))
			->add('password', 'password', array('attr' => array('title'=>'Este campo no puede estar vacio.')))
			//->add('username', 'text', array('attr' => array('class' => 'form-control', 'placeholder' => 'Nombre de Usuario')))
			//->add('password', 'password', array('attr' => array('class' => 'form-control', 'placeholder' => 'Contraseña')))
			//->add('remember', 'checkbox')
			->add('ingresar', 'submit', array('label' => 'Iniciar Sesión', 'attr' => array('class' => 'btn btn-lg btn-primary btn-block')))
			->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
			$session->set('login', 0);
			$session->set('nombre_usuario', '');
			$session->set('id_rol', '');
			$session->set('nombre_rol', '');
			$session->set('tipo_accion', '0');
			//echo "<script languaje='javascript'>alert('OK')</script>";
			/*$username=$form->get('user')->getData();
			$password=$form->get('pass')->getData();*/
			$usuario=$repository->getRepository('casamunozempresaBundle:FosUserUser')->findOneBy(array('username'=>$user->getUsername(), 'password'=>$user->getPassword() ));
			if(count($usuario) > 0) {
				$session->set('login_expirado', '');
				$session->set('login', 1);
				$session->set('nombre_usuario', $usuario->getPer()->getPrimerNombre().' '.$usuario->getPer()->getPrimerApellido());
				$session->set('id_rol', $usuario->getRol()->getRol());
				$session->set('nombre_rol',$usuario->getRol()->getNombreRol());
				return $this->render('casamunozempresaBundle:Index:menu.html.twig');
                                
			}
                        else
                            return $this->render('casamunozempresaBundle:Index:error.html.twig');
    
			
		}
		else

			return $this->render('casamunozempresaBundle:Index:index.html.twig', array('form' => $form->createView()));
    }
	
   	
	public function logoffAction()
	{
		$session = $this->getRequest()->getSession();
		$session->invalidate();
		return $this->redirect($this->generateUrl('_home'));
	}
}