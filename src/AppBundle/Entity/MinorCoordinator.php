<?php

namespace AppBundle\Entity;

/**
 * MinorCoordinator
 */
class MinorCoordinator
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $minorId;


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
     * Set minorId
     *
     * @param integer $minorId
     *
     * @return MinorCoordinator
     */
    public function setMinorId($minorId)
    {
        $this->minorId = $minorId;

        return $this;
    }

    /**
     * Get minorId
     *
     * @return integer
     */
    public function getMinorId()
    {
        return $this->minorId;
    }
}

