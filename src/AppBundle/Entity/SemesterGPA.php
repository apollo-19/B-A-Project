<?php

namespace AppBundle\Entity;

/**
 * SemesterGPA
 */
class SemesterGPA
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $studentId;

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
     * Set studentId
     *
     * @param string $studentId
     *
     * @return SemesterGPA
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return string
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set gPAValue
     *
     * @param string $gPAValue
     *
     * @return SemesterGPA
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
     * @return SemesterGPA
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
     * @return SemesterGPA
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
     * @var \AppBundle\Entity\Semester
     */
    private $semesterId;


    /**
     * Set semesterId
     *
     * @param \AppBundle\Entity\Semester $semesterId
     *
     * @return SemesterGPA
     */
    public function setSemesterId(\AppBundle\Entity\Semester $semesterId)
    {
        $this->semesterId = $semesterId;

        return $this;
    }

    /**
     * Get semesterId
     *
     * @return \AppBundle\Entity\Semester
     */
    public function getSemesterId()
    {
        return $this->semesterId;
    }
}
