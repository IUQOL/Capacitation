<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace SsCenter\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SsCenter\MainBundle\Classes\SsCenter;

/**
 * Description of SsCenterType
 *
 * @author iuqql_000
 */
class SsCenterType extends AbstractType{
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')
                ->add('descripcion','textarea',array('required' => true))
                ->add('valor1','integer');
    }
    
    
    
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
                array(
                    'data_class' => 'SsCenter\MainBundle\Classes\SsCenter'
                    
                ));
                
    }        
     
    public function getName()
    {
        return "SSCENTER";
    }
}
