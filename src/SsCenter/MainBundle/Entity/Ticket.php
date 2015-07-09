<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
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
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $closeDate;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var \SsCenter\MainBundle\Entity\Client
     */
    private $client;

    /**
     * @var \SsCenter\MainBundle\Entity\Product
     */
    private $product;

    /**
     * @var \SsCenter\MainBundle\Entity\TicketType
     */
    private $ticketType;

    /**
     * @var \SsCenter\MainBundle\Entity\StatusTicket
     */
    private $statusTicket;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $userCreator;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $userAssigned;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reports;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reports = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ticket
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
     * Set title
     *
     * @param string $title
     * @return Ticket
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ticket
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Ticket
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set closeDate
     *
     * @param \DateTime $closeDate
     * @return Ticket
     */
    public function setCloseDate($closeDate)
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * Get closeDate
     *
     * @return \DateTime 
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return Ticket
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set client
     *
     * @param \SsCenter\MainBundle\Entity\Client $client
     * @return Ticket
     */
    public function setClient(\SsCenter\MainBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SsCenter\MainBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set product
     *
     * @param \SsCenter\MainBundle\Entity\Product $product
     * @return Ticket
     */
    public function setProduct(\SsCenter\MainBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \SsCenter\MainBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set ticketType
     *
     * @param \SsCenter\MainBundle\Entity\TicketType $ticketType
     * @return Ticket
     */
    public function setTicketType(\SsCenter\MainBundle\Entity\TicketType $ticketType = null)
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Get ticketType
     *
     * @return \SsCenter\MainBundle\Entity\TicketType 
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Set statusTicket
     *
     * @param \SsCenter\MainBundle\Entity\StatusTicket $statusTicket
     * @return Ticket
     */
    public function setStatusTicket(\SsCenter\MainBundle\Entity\StatusTicket $statusTicket = null)
    {
        $this->statusTicket = $statusTicket;

        return $this;
    }

    /**
     * Get statusTicket
     *
     * @return \SsCenter\MainBundle\Entity\StatusTicket 
     */
    public function getStatusTicket()
    {
        return $this->statusTicket;
    }

    /**
     * Set userCreator
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userCreator
     * @return Ticket
     */
    public function setUserCreator(\Application\Sonata\UserBundle\Entity\User $userCreator = null)
    {
        $this->userCreator = $userCreator;

        return $this;
    }

    /**
     * Get userCreator
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserCreator()
    {
        return $this->userCreator;
    }

    /**
     * Set userAssigned
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userAssigned
     * @return Ticket
     */
    public function setUserAssigned(\Application\Sonata\UserBundle\Entity\User $userAssigned = null)
    {
        $this->userAssigned = $userAssigned;

        return $this;
    }

    /**
     * Get userAssigned
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserAssigned()
    {
        return $this->userAssigned;
    }

    /**
     * Add reports
     *
     * @param \SsCenter\MainBundle\Entity\Report $reports
     * @return Ticket
     */
    public function addReport(\SsCenter\MainBundle\Entity\Report $reports)
    {
        $this->reports[] = $reports;

        return $this;
    }

    /**
     * Remove reports
     *
     * @param \SsCenter\MainBundle\Entity\Report $reports
     */
    public function removeReport(\SsCenter\MainBundle\Entity\Report $reports)
    {
        $this->reports->removeElement($reports);
    }

    /**
     * Get reports
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReports()
    {
        return $this->reports;
    }
}
