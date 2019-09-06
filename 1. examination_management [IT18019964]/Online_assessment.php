<?php


class Online_assessment extends Assessment
{
    private $Duration;
    private $Review;
    private $Submitted;

    /**
     * Online_assessment constructor.
     * @param $Evaluation_type
     * @param $Assessment_title
     * @param $Subject
     * @param $Classroom
     * @param $DateTime
     * @param $Duration
     */
    public function __construct($Evaluation_type, $Assessment_title, $Subject, $Classroom, $DateTime, $Duration)
    {
        parent::__construct($Evaluation_type, $Assessment_title, $Subject, $Classroom, $DateTime);
        $this->Duration = $Duration;
    }


    /**
     * @return null
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param null $Duration
     */
    public function setDuration($Duration)
    {
        $this->Duration = $Duration;
    }

    /**
     * @return null
     */
    public function getReview()
    {
        return $this->Review;
    }

    /**
     * @param null $Review
     */
    public function setReview($Review)
    {
        $this->Review = $Review;
    }

    /**
     * @return null
     */
    public function getSubmitted()
    {
        return $this->Submitted;
    }

    /**
     * @param null $Submitted
     */
    public function setSubmitted($Submitted)
    {
        $this->Submitted = $Submitted;
    }




}