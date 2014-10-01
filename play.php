<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;


$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request',$request);
//all set

/*$template = $container->get('templating');

echo $template->render(
    'EventBundle:default:index.html.twig',
    array('name'=>'testing')
);*/
//save event
use Yoda\EventBundle\Entity\Event;
$event = new Event();
$event->setName('football match');
$event->setLocation('Dhaka');
$event->setDetails('testing details');
$event->setTime(new \DateTime('tomorrow'));
$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();