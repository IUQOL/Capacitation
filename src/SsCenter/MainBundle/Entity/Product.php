<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $clientProducts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tickets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clientProducts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Product
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Product
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add clientProducts
     *
     * @param \SsCenter\MainBundle\Entity\ClientProduct $clientProducts
     * @return Product
     */
    public function addClientProduct(\SsCenter\MainBundle\Entity\ClientProduct $clientProducts)
    {
        $this->clientProducts[] = $clientProducts;

        return $this;
    }

    /**
     * Remove clientProducts
     *
     * @param \SsCenter\MainBundle\Entity\ClientProduct $clientProducts
     */
    public function removeClientProduct(\SsCenter\MainBundle\Entity\ClientProduct $clientProducts)
    {
        $this->clientProducts->removeElement($clientProducts);
    }

    /**
     * Get clientProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientProducts()
    {
        return $this->clientProducts;
    }

    /**
     * Add tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     * @return Product
     */
    public function addTicket(\SsCenter\MainBundle\Entity\Ticket $tickets)
    {
        $this->tickets[] = $tickets;

        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\SsCenter\MainBundle\Entity\Ticket $tickets)
    {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTickets()
    {
        return $this->tickets;
    }
    
    public function __toString() {
        return $this->getName();
    }
    
}
