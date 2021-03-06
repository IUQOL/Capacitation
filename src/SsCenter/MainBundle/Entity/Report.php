<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 */
class Report
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \SsCenter\MainBundle\Entity\StatusNotes
     */
    private $statusNotes;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $userReport;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Report
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
     * Set date
     *
     * @param \DateTime $date
     * @return Report
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statusNotes
     *
     * @param \SsCenter\MainBundle\Entity\StatusNotes $statusNotes
     * @return Report
     */
    public function setStatusNotes(\SsCenter\MainBundle\Entity\StatusNotes $statusNotes = null)
    {
        $this->statusNotes = $statusNotes;

        return $this;
    }

    /**
     * Get statusNotes
     *
     * @return \SsCenter\MainBundle\Entity\StatusNotes 
     */
    public function getStatusNotes()
    {
        return $this->statusNotes;
    }

    /**
     * Set userReport
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userReport
     * @return Report
     */
    public function setUserReport(\Application\Sonata\UserBundle\Entity\User $userReport = null)
    {
        $this->userReport = $userReport;

        return $this;
    }

    /**
     * Get userReport
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserReport()
    {
        return $this->userReport;
    }

    /**
     * Add tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     * @return Report
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
