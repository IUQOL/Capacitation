<?php

namespace SsCenter\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
        $service = $this->get('main.math_basics');
        $age = $service->substract($age, 5);
        return $this->render('MainBundle:Default:page1.html.twig', array('age'=>$age));
    }
    
    public function page2Action($name)
    {
        $service = $this->get('main.math_basics');
        $age = $service->add(10, 5);
        return $this->render('MainBundle:Default:page2.html.twig', array('name'=>$name));
    }
    
    public function page3Action($hour)
    {   
        $service = $this->get('main.math_basics');
        $hour = $service->add($hour, 1);
        $date = new \DateTime('2015-12-12');
        $date->modify('+'.$hour.' hour');
        return $this->render('MainBundle:Default:page3.html.twig', array('hour'=>$date));
    }
    
    public function page4Action()
    {
        $service = $this->get('main.math_basics');
        $counter = $service->getCounter();
        return $this->render('MainBundle:Default:page4.html.twig', array('counter'=>$counter));
    }
    
    public function page5Action($val1 , $val2)
    {
        $service = $this->get('main.math_basics');
        $prueba = $service->Prueba($val1, $val2);
        return $this->render('MainBundle:Default:page5.html.twig', array('prueba'=>$prueba));
    }
    
    public function page6Action(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('nombre')
                ->add('descripcion','textarea',array('required' => true))
                ->add('valor1','integer')
                ->getForm();
        
 
        
        
        
        return $this->render('MainBundle:Default:page6.html.twig', array (
                              'form' => $form->createView()));
    }
    
    public function manejador1Action(Request $request)
    {
      
        $form = $this->createFormBuilder()
                ->add('nombre')
                ->add('descripcion','textarea',array('required' => true))
                ->add('valor1','integer')
                ->getForm();
        
        if($form->handleRequest($request)->isValid())
        {
            $data = $form->getData();
            return new Response(var_dump($data));
        }
    }
}
