<?php

namespace AppBundle\Entity;

/**
 * SemesterGPA
 */
class SemesterGPA
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
     * @var \AppBundle\Entity\Semester
     */
    private $semesterId;


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
     * @return SemesterGPA
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
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return SemesterGPA
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
