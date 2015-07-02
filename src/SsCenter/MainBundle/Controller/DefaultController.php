<?php

namespace SsCenter\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * 
     * @return type
     */
    public function mainAction()
    {
        return new Response($this->displayMain());
    }
    
    
    public function displayMain()
    {
      $temp = $this->get('templating');
      $result = false;
      return $temp->render('MainBundle:Default:index.html.twig',  array
              ('prueba' => 'VALOR1',
               'usuario' => array ('name' => 'Luis', 'doc' => 'cc'),
               'res' => $result,
          )      );
    }
}
