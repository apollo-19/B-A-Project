<?php

namespace AppBundle\Entity;

/**
 * ModuleCoordinator
 */
class ModuleCoordinator
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $adminId;

    /**
     * @var integer
     */
    private $moduleId;


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
     * Set adminId
     *
     * @param integer $adminId
     *
     * @return ModuleCoordinator
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * Get adminId
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return ModuleCoordinator
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }
}

