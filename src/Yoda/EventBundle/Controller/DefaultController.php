<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {
    	$data = array(
    		'count' => $count,
    		'firstName' => $firstName,
    		'ackbar' => 'Its a traaaaap!'
    		);
    	$json=json_encode($data);
        
        $response = new Response($json);
        $response->headers->set('Content-Type','application/json');

        return $response;
    }
}
