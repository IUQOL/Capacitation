<?php

namespace SsCenter\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientProduct
 */
class ClientProduct
{
    /**
     * @var integer
     */
    private $units;

    /**
     * @var \SsCenter\MainBundle\Entity\Client
     */
    private $client;

    /**
     * @var \SsCenter\MainBundle\Entity\Product
     */
    private $product;


    /**
     * Set units
     *
     * @param integer $units
     * @return ClientProduct
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return integer 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set client
     *
     * @param \SsCenter\MainBundle\Entity\Client $client
     * @return ClientProduct
     */
    public function setClient(\SsCenter\MainBundle\Entity\Client $client)
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
     * @return ClientProduct
     */
    public function setProduct(\SsCenter\MainBundle\Entity\Product $product)
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
}
