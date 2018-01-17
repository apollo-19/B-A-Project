<?php

namespace AppBundle\Entity;

/**
 * GPAResult
 */
class GPAResult
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gpaValue;

    /**
     * @var string
     */
    private $gpaType;


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
     * Set gpaValue
     *
     * @param string $gpaValue
     *
     * @return GPAResult
     */
    public function setGpaValue($gpaValue)
    {
        $this->gpaValue = $gpaValue;

        return $this;
    }

    /**
     * Get gpaValue
     *
     * @return string
     */
    public function getGpaValue()
    {
        return $this->gpaValue;
    }

    /**
     * Set gpaType
     *
     * @param string $gpaType
     *
     * @return GPAResult
     */
    public function setGpaType($gpaType)
    {
        $this->gpaType = $gpaType;

        return $this;
    }

    /**
     * Get gpaType
     *
     * @return string
     */
    public function getGpaType()
    {
        return $this->gpaType;
    }
}

