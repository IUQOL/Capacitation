<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusTicket
 */
class StatusTicket
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $generator;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tickets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return StatusTicket
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set generator
     *
     * @param string $generator
     * @return StatusTicket
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;

        return $this;
    }

    /**
     * Get generator
     *
     * @return string 
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return StatusTicket
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
     * Set description
     *
     * @param string $description
     * @return StatusTicket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     * @return StatusTicket
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
}
