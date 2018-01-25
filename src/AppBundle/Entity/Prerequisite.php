<?php

namespace AppBundle\Entity;

/**
 * Prerequisite
 */
class Prerequisite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $courseModuleType;

    /**
     * @var string
     */
    private $prerequisiteType;

    /**
     * @var \AppBundle\Entity\Course
     */
    private $courseId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $moduleId;

    /**
     * @var \AppBundle\Entity\Course
     */
    private $prerequisiteCourseId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $prerequisiteModuleId;


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
     * Set courseModuleType
     *
     * @param string $courseModuleType
     *
     * @return Prerequisite
     */
    public function setCourseModuleType($courseModuleType)
    {
        $this->courseModuleType = $courseModuleType;

        return $this;
    }

    /**
     * Get courseModuleType
     *
     * @return string
     */
    public function getCourseModuleType()
    {
        return $this->courseModuleType;
    }

    /**
     * Set prerequisiteType
     *
     * @param string $prerequisiteType
     *
     * @return Prerequisite
     */
    public function setPrerequisiteType($prerequisiteType)
    {
        $this->prerequisiteType = $prerequisiteType;

        return $this;
    }

    /**
     * Get prerequisiteType
     *
     * @return string
     */
    public function getPrerequisiteType()
    {
        return $this->prerequisiteType;
    }

    /**
     * Set courseId
     *
     * @param \AppBundle\Entity\Course $courseId
     *
     * @return Prerequisite
     */
    public function setCourseId(\AppBundle\Entity\Course $courseId = null)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return \AppBundle\Entity\Course
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set moduleId
     *
     * @param \AppBundle\Entity\Module $moduleId
     *
     * @return Prerequisite
     */
    public function setModuleId(\AppBundle\Entity\Module $moduleId = null)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return \AppBundle\Entity\Module
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set prerequisiteCourseId
     *
     * @param \AppBundle\Entity\Course $prerequisiteCourseId
     *
     * @return Prerequisite
     */
    public function setPrerequisiteCourseId(\AppBundle\Entity\Course $prerequisiteCourseId = null)
    {
        $this->prerequisiteCourseId = $prerequisiteCourseId;

        return $this;
    }

    /**
     * Get prerequisiteCourseId
     *
     * @return \AppBundle\Entity\Course
     */
    public function getPrerequisiteCourseId()
    {
        return $this->prerequisiteCourseId;
    }

    /**
     * Set prerequisiteModuleId
     *
     * @param \AppBundle\Entity\Module $prerequisiteModuleId
     *
     * @return Prerequisite
     */
    public function setPrerequisiteModuleId(\AppBundle\Entity\Module $prerequisiteModuleId = null)
    {
        $this->prerequisiteModuleId = $prerequisiteModuleId;

        return $this;
    }

    /**
     * Get prerequisiteModuleId
     *
     * @return \AppBundle\Entity\Module
     */
    public function getPrerequisiteModuleId()
    {
        return $this->prerequisiteModuleId;
    }
}
