<?php

    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");
    include("../services/ITimetableCellServiceImplementation.php");

    if(isset($_POST['timetable_admin_insert_next'])){

        $tempTimetableId = $_POST['timetable_admin_insert_timetableID'];
        $timetable = new Timetable();
        $timetable->setTimetableId($tempTimetableId);

        //TimetableServiceImplementation to create a timetable
        $timetableService = new ITimetableServiceImplementation();
        $timetableService->addTimetable();

        header('Location: ../timetable_admin_insert_page.php');
    }

    if(isset($_POST['timetable_admin_insert_save'])){
        $timeslot_start = 8;
        $timeslot_end = 16;

        $timetableCell = new TimetableCell();

        for($timeslot_start;$timeslot_start<=$timeslot_end;$timeslot_start++){
            for($i=1;$i<=7;$i++){
                $timetableCell->setDay($i);
                $timetableCell->setStartTime($timeslot_start);
                $timetableCell->setEndTime($timeslot_start+1);
                $timetableCell->setTutorId($_POST[$timeslot_start."tutor".$i]);
                $timetableCell->setSubjectId($_POST[$timeslot_start."subject".$i]);

                //TimetableCells implementation
                $timetableCellService = new ITimetableCellServiceImplementation();
                $timetableCellService->addTimetableCell();
            }
        }

        header('Location: ../timetable_admin_insert_page.php');
    }