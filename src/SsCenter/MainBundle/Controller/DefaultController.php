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
    
    public function page1Action($age)
    {
        return $this->render('MainBundle:Default:page1.html.twig', array('age'=>$age));
    }
    
    public function page2Action($name)
    {
        return $this->render('MainBundle:Default:page2.html.twig', array('name'=>$name));
    }
    
    public function page3Action($hour)
    {
       
                
        $date = new \DateTime('2006-12-12');
        $date->modify('+'.$hour.' hour');
        
        return $this->render('MainBundle:Default:page3.html.twig', array('hour'=>$date));
    }
}
