<?php

    //inclusion of php scripts
    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");
    include("../services/ITimetableCellServiceImplementation.php");

    //the next button in the timetable_admin_insert _main_page will be working on this if statement
    if(isset($_POST['timetable_admin_insert_next'])){

        //counter initialized
        $count = 0;

        //id entered is stored
        $id = $_POST['timetable_admin_insert_timetableID'];

        //if no id is entered redirect the user back
        if(empty($id)) {
            $url = "../timetable_admin_insert_main_page.php?insertMain=empty";
            header('Location: '.$url);
        }

        //if an id is entered the id will begin to get validated
        else{
            //id validation
            $timetableService = new ITimetableServiceImplementation();
            $res = $timetableService->viewAllTimetables();

            //counter increases if a similar id is already available
            for($q=0;$q<count($res);$q++){
                if(strcmp($id,$res[$q])==0){
                    $count++;
                }
            }

            //if counter is greater than 0,a timetable with the id entered is already available
            if($count>0){
                $url = "../timetable_admin_insert_main_page.php?insertMain=exist&timetable=".$id;
                header('Location: '.$url);
            }

            //if counter is 0, unique id
            else{
                $tempTimetableId = $_POST['timetable_admin_insert_timetableID'];

                //redirect user to the timetable_admin_insert_page with id as a parameter in the URL
                $url = "../timetable_admin_insert_page.php?timetable=" . $tempTimetableId;
                header('Location: ' . $url);
            }

        }
    }

    //the save button in the timetable_admin_insert _page will be working on this if statement
    if(isset($_POST['timetable_admin_insert_save'])){

        //id collected from the URL
        $tempTimeId = $_GET['timetable'];

        Timetable::setTimetableId($tempTimeId);

        //TimetableServiceImplementation to create a timetable
        $timetableService = new ITimetableServiceImplementation();
        $timetableService->addTimetable();

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

                //TimetableCellService implementation
                $timetableCellService = new ITimetableCellServiceImplementation();
                //calling the addTimetableCell method to add cells of the timetable to create a timetable
                $timetableCellService->addTimetableCell();

            }
        }

        //redirect user to the timetable_admin_insert_main_page with parameters of success and id in the URL
        $url = "../timetable_admin_insert_main_page.php?insertTimetable=success&id=".$tempTimeId;
        header('Location:' .$url);
    }
