<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $nit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;

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
    public function __construct() {
        $this->contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientProducts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Client
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Client
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return Client
     */
    public function setNit($nit) {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit() {
        return $this->nit;
    }

    /**
     * Add contact
     *
     * @param \SsCenter\MainBundle\Entity\ContactForm $contact
     * @return Client
     */
    public function addContact(\SsCenter\MainBundle\Entity\ContactForm $contact) {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \SsCenter\MainBundle\Entity\ContactForm $contact
     */
    public function removeContact(\SsCenter\MainBundle\Entity\ContactForm $contact) {
        $this->contact->removeElement($contact);
    }

    /**
     * Get contact
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Add clientProducts
     *
     * @param \SsCenter\MainBundle\Entity\ClientProduct $clientProducts
     * @return Client
     */
    public function addClientProduct(\SsCenter\MainBundle\Entity\ClientProduct $clientProducts) {
        $this->clientProducts[] = $clientProducts;

        return $this;
    }

    /**
     * Remove clientProducts
     *
     * @param \SsCenter\MainBundle\Entity\ClientProduct $clientProducts
     */
    public function removeClientProduct(\SsCenter\MainBundle\Entity\ClientProduct $clientProducts) {
        $this->clientProducts->removeElement($clientProducts);
    }

    /**
     * Get clientProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientProducts() {
        return $this->clientProducts;
    }

    /**
     * Add tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     * @return Client
     */
    public function addTicket(\SsCenter\MainBundle\Entity\Ticket $tickets) {
        $this->tickets[] = $tickets;

        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \SsCenter\MainBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\SsCenter\MainBundle\Entity\Ticket $tickets) {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTickets() {
        return $this->tickets;
    }

    public function __toString() {
        return $this->getName();
    }

}
