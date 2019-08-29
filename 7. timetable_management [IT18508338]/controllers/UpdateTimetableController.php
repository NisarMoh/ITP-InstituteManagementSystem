<?php

    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");
    include("../services/ITimetableCellServiceImplementation.php");

    if(isset($_POST['timetable_admin_update_updateTimetable'])){

        $timetable = new Timetable();
        $timetable->setTimetableId($_POST['timetable_admin_update_timetableID']);

        header('Location: ../timetable_admin_update_page.php');
    }
    if(isset($_POST['timetable_admin_update_saveChanges'])){
        $timeslot_start = 8;
        $timeslot_end = 16;

        $timetableCell = new TimetableCell();

        for($timeslot_start;$timeslot_start<=$timeslot_end;$timeslot_start++){
            for($i=1;$i<=7;$i++){
                $timetableCell->setDay($i);
                $timetableCell->setStartTime($timeslot_start);
                $timetableCell->setEndTime($timeslot_start+1);
                $timetableCell->setTutorId($_POST[$timeslot_start."ututor".$i]);
                $timetableCell->setSubjectId($_POST[$timeslot_start."usubject".$i]);

                //TimetableCells implementation
                $timetableCellService = new ITimetableCellServiceImplementation();
                $timetableCellService->updateTimetableCell();
            }
        }

        header('Location: ../timetable_admin_view_page.php');
    }