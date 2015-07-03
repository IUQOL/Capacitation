<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commandAdd
 *
 * @author iuqql_000
 */


namespace SsCenter\MainBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddCommand extends ContainerAwareCommand {
    
    
    protected function configure() {
        $this->setName('sscenter:prueba');
       
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->write("Esto es una prueba de comandos");
    }
    
    
    /**
     * Sumar dos valores
     * @param int $value1
     * @param int $value2
     * @return int
     */
    private function add($value1, $value2)
    {
      
        return $value1+$value2;
    }
    
          
}
