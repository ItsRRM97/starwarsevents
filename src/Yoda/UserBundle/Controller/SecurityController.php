<?php

namespace Yoda\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller{
	/**
	*@Route("/login", name="login_form")
	*@Template
	*/
	public function loginAction(Request $request)
	{
	    $authenticationUtils = $this->get('security.authentication_utils');

	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return array(
	    	//last username entered by user
	    	'last_username' => $lastUsername,
	    	'error' => $error,
	    	);
	}

	/**
	*@Route("/login_check",name="login_check")
	*/
	public function loginCheckAction()
	{
		//not going to put anything here but why?
	}
	/**
	*@Route("/logout",name="logout")
	*/
	public function logoutAction()
	{
		//not going to put anything here but why?
	}
}