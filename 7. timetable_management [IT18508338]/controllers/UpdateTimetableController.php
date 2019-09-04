<?php

    //inclusion of php scripts
    include dirname(__FILE__).'/../models/Timetable.php';
    include dirname(__FILE__).'/../models/TimetableCell.php';
    include dirname(__FILE__).'/../services/ITimetableServiceImplementation.php';
    include dirname(__FILE__).'/../services/ITimetableCellServiceImplementation.php';

    //the update button in the timetable_admin_update_main_page will be working on this if statement
    if(isset($_POST['timetable_admin_update_updateTimetable'])) {

        //counter initialized
        $count = 0;

        //id entered is stored
        $id = $_POST['timetable_admin_update_timetableID'];

        //if no id is entered redirect the user back
        if (empty($id)) {
            $url="../timetable_admin_update_main_page.php?updateMain=empty";
            header('Location:'.$url);
        }

        //if an id is entered the id will begin to get validated
        else {

            //validation to check if there is a timetable with that particular id
            $timetableService = new ITimetableServiceImplementation();
            $res = $timetableService->viewAllTimetables();

            //counter increases if a similar id is found
            for ($q = 0; $q < count($res); $q++) {
                if (strcmp($id, $res[$q]) == 0) {
                    $count++;
                }
            }

            //if counter is greater than 0,timetable with the id is found
            if ($count > 0) {
                Timetable::setTimetableId($id);

                //redirect user to the timetable_admin_update with the parameter id in the URL
                $url = "../timetable_admin_update_page.php?updateTimetable=" . $id;
                header('Location: ' . $url);
            }
            //if counter is 0,timetable with the id is not found
            else {
                //redirect user to the timetable_admin_update_main_page with parameters of notFound and id in the URL
                $url = "../timetable_admin_update_main_page.php?updateMain=notFound&id=" . $id;
                header('Location: ' . $url);
            }
        }
    }

    //the save changes button in the timetable_admin_update_page will be working on this if statement
    if(isset($_POST['timetable_admin_update_saveChanges'])){

        //id collected from the URL
        $tempTimeId = $_GET['updateTimetable'];

        //start and end times
        $timeslot_start = 8;
        $timeslot_end = 16;

        //for loop from the start time to the end time
        for($timeslot_start;$timeslot_start<=$timeslot_end;$timeslot_start++){
            //for loop from 1 to 7 - 1 represents monday, 2 represents tuesday and so on
            for($i=1;$i<=7;$i++){
                //set the inputs by calling the static class TimetableCell
                TimetableCell::setTimeId($tempTimeId);
                TimetableCell::setDay($i);
                TimetableCell::setStartTime($timeslot_start);
                TimetableCell::setEndTime($timeslot_start+1);
                TimetableCell::setTutorId($_POST[$timeslot_start."tutor".$i]);
                TimetableCell::setSubjectId($_POST[$timeslot_start."subject".$i]);

                //TimetableCells implementation
                $timetableCellService = new ITimetableCellServiceImplementation();
                $timetableCellService->updateTimetableCell(TimetableCell::getTimeId(),TimetableCell::getSubjectId(),TimetableCell::getTutorId(),TimetableCell::getDay(),TimetableCell::getStartTime());
            }
        }

        //redirect user to the timetable_admin_update_main_page with parameters of success and id in the URL
        $url = "../timetable_admin_update_main_page.php?updateTimetable=success&id=".$tempTimeId;
        header('Location: '.$url);
    }