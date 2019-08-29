<?php

    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");


    if(isset($_POST['timetable_admin_delete_delete'])){

        $timetable = new Timetable();
        $timetable->setTimetableId($_POST['timetable_admin_delete_timetableID']);

        $timetableService = new ITimetableServiceImplementation();
        $timetableService->deleteTimetable();

        header('Location: ../timetable_admin_view_page.php');
    }