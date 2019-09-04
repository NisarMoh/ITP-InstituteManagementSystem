<?php

//inclusion of php scripts
include("ITimetableCellService.php");
include dirname(__FILE__).'/../mysql_db_connection.inc.php';

class ITimetableCellServiceImplementation implements ITimetableCellService
{

    //addTimetableCell() method adds timetable cell data to the database
    public function addTimetableCell()
    {

        global $conn;

        $tcsId = TimetableCell::getTimeId();
        $tcsTutor = TimetableCell::getTutorId();
        $tcsSubject = TimetableCell::getSubjectId();
        $tcsDay = TimetableCell::getDay();
        $tcsStartTime = TimetableCell::getStartTime();
        $tcsEndTime = TimetableCell::getEndTime();
        $sql = "INSERT INTO timetable_staff_subject(tid,staff_name,subject_name,day,start_time,end_time) VALUES('$tcsId','$tcsTutor','$tcsSubject','$tcsDay','$tcsStartTime','$tcsEndTime');";

        $conn->query($sql);
    }

    //updateTimetableCell() method updates timetable cell data to the database
    public function updateTimetableCell($timetableCellMainId,$subject,$tutor,$day,$startTime)
    {

        global $conn;

        $sql = "UPDATE timetable_staff_subject SET staff_name='$tutor',subject_name='$subject' WHERE tid LIKE'$timetableCellMainId' AND day='$day' AND start_time='$startTime';";

        $conn->query($sql);

    }

    //viewAllTimetableCells() method retrieves timetable cell data from the database based on the timetable id,day and the start time
    public function viewAllTimetableCells($timetableCellMainId,$day,$startTime)
    {

        global $conn;

        $sql = "SELECT * FROM timetable_staff_subject where tid LIKE'$timetableCellMainId' AND day='$day' AND start_time='$startTime';";

        $res = $conn->query($sql);
        if($res->num_rows>0) {
            while ($row = $res->fetch_assoc()) {

                $tempStaff = $row["staff_name"];
                $tempSubject = $row["subject_name"];

                //not used but can be used later on if system is improved
                $tempday = $row["day"];
                $tempStart = $row["start_time"];
                $tempEnd = $row["end_time"];

                TimetableCell::setSubjectId($tempSubject);
                TimetableCell::setTutorId($tempStaff);

            }
        }
    }

}