<?php

namespace SsCenter\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SsCenter\MainBundle\Form\Type\SsCenterType;
use SsCenter\MainBundle\Classes\SsCenter;
use SsCenter\MainBundle\Entity\Item;
use SsCenter\MainBundle\Entity\Ticket;
use SsCenter\MainBundle\Entity\Report;







use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Sonata\UserBundle\Model\UserInterface;


class DefaultController extends Controller
{
    /**
     * 
     * @return type
     */
    public function mainAction()
    {
        $em = $this->getDoctrine()->getManager();
        
         $now = new \DateTime();
        $user = $this->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $ticket = new Ticket();
        $ticket->setCode('A00431');
        $ticket->setCreationDate($now);
        $ticket->setTitle('Esto es una prueba');
        $ticket->setDescription('Desc');
        
        for( $i=0; $i<5;$i++)
        {
           $report = new Report();
           $report->setDate($now);
           $report->setNotes('Probando'.$i);
           $report->setUserReport($user);
           $em->persist($report);
          
           $ticket->addReport($report);
        }
        
        
        
        $em->persist($ticket);
        $em->flush();
        
        return new Response($this->displayMain());
               
    }
    
    
    public function displayMain()
    {
      $temp = $this->get('templating');
      $result = false;
      
      $em = $this->getDoctrine()->getManager();
      $report = $em->getRepository('SsCenterMainBundle:Report')->findOneBy(array('id'=> 16));
      
      
      $report->setNotes('Prueba numero2');
      
      $em->persist($report);
      $em->flush();
      return $temp->render('SsCenterMainBundle:Default:index.html.twig',  array
              ('prueba' => var_dump($report),
               'usuario' => array ('name' => 'Luis', 'doc' => 'cc'),
               'res' => $result,
          )      );
    }
    
    public function page1Action($age)
    {
        $service = $this->get('main.math_basics');
        $age = $service->substract($age, 5);
        return $this->render('SsCenterMainBundle:Default:page1.html.twig', array('age'=>$age));
    }
    
    public function page2Action($name)
    {
        $service = $this->get('main.math_basics');
        $age = $service->add(10, 5);
        return $this->render('SsCenterMainBundle:Default:page2.html.twig', array('name'=>$name));
    }
    
    public function page3Action($hour)
    {   
        $service = $this->get('main.math_basics');
        $hour = $service->add($hour, 1);
        $date = new \DateTime('2015-12-12');
        $date->modify('+'.$hour.' hour');
        return $this->render('SsCenterMainBundle:Default:page3.html.twig', array('hour'=>$date));
    }
    
    public function page4Action()
    {
        $service = $this->get('main.math_basics');
        $counter = $service->getCounter();
        return $this->render('SsCenterMainBundle:Default:page4.html.twig', array('counter'=>$counter));
    }
    
    public function page5Action($val1 , $val2)
    {
        $service = $this->get('main.math_basics');
        $prueba = $service->Prueba($val1, $val2);
        return $this->render('SsCenterMainBundle:Default:page5.html.twig', array('prueba'=>$prueba));
    }
    
    public function page6Action(Request $request)
    {
       //Crear 
        $sscenter = new SsCenter('','',0);
        
        
        
        
        
        return $this->proccesForm($request, $sscenter);
    }
    
    
    
    
    private function proccesForm(Request $request, SsCenter $sscenter) 
    {
        $form = $this->createForm(new SsCenterType(),$sscenter) ;
        
        if($form->handleRequest($request)->isValid())
        {
            //$data = $form->getData();
            //Logica a realizar con el objeto
            $item = new Item();
        
        $item->setDescription('Descripción de Prueba');
        $item->setName('Item1');
        $item->setPrice(2);
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($item);
        
        $em->flush();
        
        
            
            return new Response('Se creo el objeto con id: '.var_dump($item));
        }
        return $this->render('SsCenterMainBundle:Default:page6.html.twig', array (
                              'form' => $form->createView()));
    }
   
}
