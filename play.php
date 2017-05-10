<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require_once __DIR__.'/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request',$request);

//all the setup is done!!

use Yoda\EventBundle\Entity\Events;

$event = new Events();
$event -> setName('Darth\'s surprise Birthday Party!');
$event -> setLocation('Deathstar');
$event -> setTime(new \DateTime('Tomorrow Noon!'));
//$event->setDetails('Ha! Darth Hates Supirses!!!!');

//$templating=$container->gt('templating');
//echo $templating->render('EventBundle:Default:index.html.twig',array('name' => 'Vader', 'count'=> 3));