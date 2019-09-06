<?php

class Assessment
{
    protected $AssessmentID;
    protected $Evaluation_type;
    protected $Assessment_title;
    protected $Subject;
    protected $Classroom;
    protected $DateTime;

    /**
     * Assessment constructor.
     * @param $Evaluation_type
     * @param $Assessment_title
     * @param $Subject
     * @param $Classroom
     * @param $DateTime
     */
    public function __construct($Evaluation_type, $Assessment_title, $Subject, $Classroom, $DateTime)
    {
        $this->Evaluation_type = $Evaluation_type;
        $this->Assessment_title = $Assessment_title;
        $this->Subject = $Subject;
        $this->Classroom = $Classroom;
        $this->DateTime = $DateTime;
    }


    /**
     * @return null
     */
    public function getAssessmentID()
    {
        return $this->AssessmentID;
    }

    /**
     * @param null $AssessmentID
     */
    public function setAssessmentID($AssessmentID)
    {
        $this->AssessmentID = $AssessmentID;
    }

    /**
     * @return null
     */
    public function getEvaluationType()
    {
        return $this->Evaluation_type;
    }

    /**
     * @param null $Evaluation_type
     */
    public function setEvaluationType($Evaluation_type)
    {
        $this->Evaluation_type = $Evaluation_type;
    }

    /**
     * @return null
     */
    public function getAssessmentTitle()
    {
        return $this->Assessment_title;
    }

    /**
     * @param null $Assessment_title
     */
    public function setAssessmentTitle($Assessment_title)
    {
        $this->Assessment_title = $Assessment_title;
    }

    /**
     * @return null
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param null $Subject
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
    }

    /**
     * @return null
     */
    public function getClassroom()
    {
        return $this->Classroom;
    }

    /**
     * @param null $Classroom
     */
    public function setClassroom($Classroom)
    {
        $this->Classroom = $Classroom;
    }

    /**
     * @return null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }

    /**
     * @param null $DateTime
     */
    public function setDateTime($DateTime)
    {
        $this->DateTime = $DateTime;
    }






}