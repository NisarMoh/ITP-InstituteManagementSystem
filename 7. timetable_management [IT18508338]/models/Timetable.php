<?php


class Timetable
{
    private $timetable_id;

    //constructor
    public function __construct(){
        $this->timetable_id = "";
    }

    /**
     * @return string
     * getter
     */
    public function getTimetableId()
    {
        return $this->timetable_id;
    }

    /**
     * @param string $timetable_id
     * setter
     */
    public function setTimetableId($timetable_id)
    {
        $this->timetable_id = $timetable_id;
    }

    /**
     * @return array
     */
    public function getTimetableCell()
    {
        return $this->timetableCell;
    }

    /**
     * @param array $timetableCell
     */
    public function setTimetableCell($timetableCell)
    {
        $this->timetableCell = $timetableCell;
    }



}
