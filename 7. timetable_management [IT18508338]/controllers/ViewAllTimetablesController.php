<?php

    /*include("../7.%20timetable_management%20%5BIT18508338%5D/models/Timetable.php");
    include("../models/TimetableCell.php");*/

    include dirname(__FILE__).'/../models/Timetable.php';
    include dirname(__FILE__).'/../models/TimetableCell.php';
    include dirname(__FILE__).'/../services/ITimetableServiceImplementation.php';
    include dirname(__FILE__).'/../services/ITimetableCellServiceImplementation.php';


    //new ITimetableServiceImplementation created to view all the timetables
    $timetableView = new ITimetableServiceImplementation();


