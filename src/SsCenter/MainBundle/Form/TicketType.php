<?php

namespace SsCenter\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('title')
            ->add('description')
//            ->add('creationDate')
//            ->add('closeDate')
//            ->add('fileName')
            ->add('client')
            ->add('product')
            ->add('ticketType')
//            ->add('statusTicket')
//            ->add('reports')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SsCenter\MainBundle\Entity\Ticket',
            'show_legend' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sscenter_mainbundle_ticket';
    }
}
