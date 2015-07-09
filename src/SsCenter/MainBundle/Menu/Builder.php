<?php
// src/AppBundle/Menu/Builder.php
namespace SsCenter\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    
    
    public function mainMenu(FactoryInterface $factory, array $options)
    {
       $menu = $factory->createItem('root', array(
            'navbar' => true,
        ));

        $menu->addChild('Administrador', array('uri' => '#', 'atributes' => array ('onclick' => 'alert("prueba");')));

       

        // create another menu item
        $ticket = $menu->addChild('Tickets', array('uri' => '#'));
        

        // you can also add sub level's to your menu's as follows
        $ticket->addChild('Crear', array('uri' => '#'));
        
         // you can also add sub level's to your menu's as follows
        $ticket->addChild('Comentar', array('uri' => '#'));
        
         // you can also add sub level's to your menu's as follows
        $ticket->addChild('Cerrar', array('uri' => '#'));
        
         // you can also add sub level's to your menu's as follows
        $ticket->addChild('Listado', array('uri' => '#'));
        

        // ... add more children

        return $menu;
    }
}