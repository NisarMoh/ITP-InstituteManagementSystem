<?php

include("ITimetableService.php");
include '../../mysql_db_connection.inc.php';


class ITimetableServiceImplementation implements ITimetableService
{


    public function addTimetable()
    {
        global $conn;
        $iTimetable = new Timetable();
        $tempTimetableId = $iTimetable->getTimetableId();

        //sql statement
        $sql = "INSERT INTO Timetable('timetable_id','hall_id') VALUES ('$tempTimetableId','$tempTimetableId')";
        $conn->query($sql);
    }

    public function deleteTimetable()
    {
        // TODO: Implement deleteTimetable() method.
    }

    public function updateTimetable()
    {
        // TODO: Implement updateTimetable() method.
    }

    public function viewAllTimetables()
    {
        // TODO: Implement viewAllTimetables() method.
    }

    public function viewRelevantTimetables()
    {
        // TODO: Implement viewRelevantTimetables() method.
    }
}