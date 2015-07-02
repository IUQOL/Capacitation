<?php

namespace SsCenterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function mainAction()
    {
        return new Response('HOLA MUNDO '); 
    }
    
    public function mainRedirectAction()
    {
        return $this->redirect($this->generateUrl('ss_center_homepage'));
    }
    
    
    public function indexAction($name)
    {
        return $this->render('CapacitationBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function addingAction($val1, Request $request) 
    {
    
        return new Response('Valor ' . $val1. ' '. $request->getHttpHost());
        
    }
}
