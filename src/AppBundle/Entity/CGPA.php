<?php

namespace AppBundle\Entity;

/**
 * CGPA
 */
class CGPA
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
     * @var \AppBundle\Entity\Student
     */
    private $studentId;


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
     * @return CGPA
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
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return CGPA
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
}
