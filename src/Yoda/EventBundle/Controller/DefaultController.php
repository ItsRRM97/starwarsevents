<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {
    	$em = $this->container->get('doctrine')->getManager();
    	$repo = $em->getDoctrine()->getManager();

    	$event = $repo->findOneBy(array('name'=>'Darth\'s surprise birthday party!'));
  
    		return $this->render('EventBundle:Default:index.html.twig',
    			array('name' => $firstName)
    			);
    	}
    }
