<?php

namespace AppBundle\Entity;

/**
 * ModuleGPA
 */
class ModuleGPA
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
     * @var integer
     */
    private $creditHour;

    /**
     * @var string
     */
    private $totalSum;

    /**
     * @var \AppBundle\Entity\Student
     */
    private $studentId;

    /**
     * @var \AppBundle\Entity\Module
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
     * Set gpaValue
     *
     * @param string $gpaValue
     *
     * @return ModuleGPA
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
     * Set creditHour
     *
     * @param integer $creditHour
     *
     * @return ModuleGPA
     */
    public function setCreditHour($creditHour)
    {
        $this->creditHour = $creditHour;

        return $this;
    }

    /**
     * Get creditHour
     *
     * @return integer
     */
    public function getCreditHour()
    {
        return $this->creditHour;
    }

    /**
     * Set totalSum
     *
     * @param string $totalSum
     *
     * @return ModuleGPA
     */
    public function setTotalSum($totalSum)
    {
        $this->totalSum = $totalSum;

        return $this;
    }

    /**
     * Get totalSum
     *
     * @return string
     */
    public function getTotalSum()
    {
        return $this->totalSum;
    }

    /**
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return ModuleGPA
     */
    public function setStudentId(\AppBundle\Entity\Student $studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set moduleId
     *
     * @param \AppBundle\Entity\Module $moduleId
     *
     * @return ModuleGPA
     */
    public function setModuleId(\AppBundle\Entity\Module $moduleId)
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
}
