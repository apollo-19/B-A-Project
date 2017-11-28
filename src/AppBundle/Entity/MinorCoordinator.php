<?php

namespace AppBundle\Entity;

/**
 * Minor_Coordinator
 */
class MinorCoordinator
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $adminId;

    /**
     * @var int
     */
    private $minorId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adminId
     *
     * @param integer $adminId
     *
     * @return Minor_Coordinator
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * Get adminId
     *
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * Set minorId
     *
     * @param integer $minorId
     *
     * @return Minor_Coordinator
     */
    public function setMinorId($minorId)
    {
        $this->minorId = $minorId;

        return $this;
    }

    /**
     * Get minorId
     *
     * @return int
     */
    public function getMinorId()
    {
        return $this->minorId;
    }
}
