<?php


class Written_assessment extends Assessment
{
    private $Marked_by;

    /**
     * written_assessment constructor.
     * @param $Evaluation_type
     * @param $Assessment_title
     * @param $Subject
     * @param $Classroom
     * @param $DateTime
     * @param $Marked_by
     */
    public function __construct($Evaluation_type, $Assessment_title, $Subject, $Classroom, $DateTime, $Marked_by)
    {
        parent::__construct($Evaluation_type, $Assessment_title, $Subject, $Classroom, $DateTime);
        $this->Marked_by = $Marked_by;
    }

    /**
     * @return mixed
     */
    public function getMarkedBy()
    {
        return $this->Marked_by;
    }

    /**
     * @param mixed $Marked_by
     */
    public function setMarkedBy($Marked_by)
    {
        $this->Marked_by = $Marked_by;
    }

}