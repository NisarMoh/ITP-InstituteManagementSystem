<?php

    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");

    if(isset($_POST[''])){

        header('Location: ../timetable_admin_view_page.php');
    }