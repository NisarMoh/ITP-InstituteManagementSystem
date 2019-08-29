<?php


class TimetableCell
{
    private $tutorId;
    private $subjectId;
    private $startTime;
    private $endTime;
    private $day;


    /**
     * TimetableCell constructor.
     * @param $tutorId
     * @param $subjectId
     * @param $time
     * @param $day
     */

    public function __construct()
    {
        $this->tutorId = "";
        $this->subjectId = "";
        $this->startTime = "";
        $this->endTime = "";
        $this->day = "";
    }

    /**
     * @return string
     */
    public function getTutorId()
    {
        return $this->tutorId;
    }

    /**
     * @param string $tutorId
     */
    public function setTutorId($tutorId)
    {
        $this->tutorId = $tutorId;
    }

    /**
     * @return string
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param string $subjectId
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param string $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }











}