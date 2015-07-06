<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace SsCenter\MainBundle\Classes;
/**
 * Description of SsCenter
 *
 * @author iuqql_000
 */
class SsCenter {
    //put your code here
    
    
    private $nombre;
    
    private $descripcion;
    
    private $valor1;
    
    public function __construct($nombre = 'PRUEBA', $descripcion='',$valor1=1 ) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->valor1 = $valor1;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
     public function setNombre($nombre)
    {
         $this->nombre = $nombre;
    
         return $this;
    }
    
     public function getDescripcion()
    {
        return $this->descripcion;
    }
    
     public function setDescripcion($descripcion)
    {
         $this->descripcion = $descripcion;
    
         return $this;
    }
    
    
     public function getValor1()
    {
        return $this->valor1;
    }
    
     public function setValor1($valor1)
    {
         $this->valor1 = $valor1;
    
         return $this;
    }
            
    
}
