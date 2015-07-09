<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusNotes
 */
class StatusNotes
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
    private $reports;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reports = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return StatusNotes
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
     * @return StatusNotes
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
     * @return StatusNotes
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
     * @return StatusNotes
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
     * Add reports
     *
     * @param \SsCenter\MainBundle\Entity\Report $reports
     * @return StatusNotes
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
