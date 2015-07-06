<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MathBasic
 *
 * @author iuqql_000
 */

namespace SsCenter\MainBundle\Classes;


/**
 * 
 */
class MathBasic {
    
    /**
     *
     * @var int
     */
    private $counter;
    
    private $a;
    
    private $b;
    
    private $c;
    
    
    /**
     * Constructor de la clase
     * @param int $counter
     */
    public function __construct($counter = 0, $a = 0, $b = 0 , $c = 0)
    {
        $this->counter = $counter;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        
    }
    
    /**
     * Sumar dos valores
     * @param int $value1
     * @param int $value2
     * @return int
     */
    public function add($value1, $value2)
    {
//        $this->counter++;
        return $value1+$value2;
    }
    
    /**
     * Restar dos valores
     * @param int $value1
     * @param int $value2
     * @return int
     */
    public function substract($value1, $value2)
    {
//        $this->counter++;
        return $value1-$value2;
    }
    
    
    /**
     * Restar dos valores
     * @param int $value1
     * @param int $value2
     * @return int
     */
    public function prueba($value1, $value2)
    {
        $value3 = ($this->a - $this->b)*$this->c;
        return ($value1*$value2)/$value3;
    }
    
    /**
     * Obtener el contador de operaciones
     * @return int
     */
    public function getCounter()
    {
        return $this->counter;
    }        
            
}
