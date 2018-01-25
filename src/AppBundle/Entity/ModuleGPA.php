<?php

namespace AppBundle\Entity;

/**
 * ModuleGPA
 */
class ModuleGPA
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gPAValue;

    /**
     * @var string
     */
    private $creditHour;

    /**
     * @var string
     */
    private $totalSum;


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
     * Set gPAValue
     *
     * @param string $gPAValue
     *
     * @return ModuleGPA
     */
    public function setGPAValue($gPAValue)
    {
        $this->gPAValue = $gPAValue;

        return $this;
    }

    /**
     * Get gPAValue
     *
     * @return string
     */
    public function getGPAValue()
    {
        return $this->gPAValue;
    }

    /**
     * Set creditHour
     *
     * @param string $creditHour
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
     * @return string
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
     * @var string
     */
    private $gpaValue;

    /**
     * @var \AppBundle\Entity\Student
     */
    private $studentId;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $moduleId;


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
