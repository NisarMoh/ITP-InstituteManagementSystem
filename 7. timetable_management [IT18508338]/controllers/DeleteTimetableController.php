<?php

    //inclusion of php scripts
    include("../models/Timetable.php");
    include("../models/TimetableCell.php");
    include("../services/ITimetableServiceImplementation.php");

    //the delete button in the timetable_admin_delete_page will be working on this if statement
    if(isset($_POST['timetable_admin_delete_delete'])){

        //counter initialized
        $count = 0;

        //id entered is stored
        $id = $_POST['timetable_admin_delete_timetableID'];

        //if no id is entered redirect the user back
        if(empty($id)) {
            $url = "../timetable_admin_delete_page.php?deleteMain=empty";
            header('Location:'.$url);
        }

        //if an id is entered the id will begin to get validated
        else{

            //validation to check if there is a timetable with that particular id
            $timetableService = new ITimetableServiceImplementation();
            $res = $timetableService->viewAllTimetables();

            //counter increases if a similar id is found
            for($q=0;$q<count($res);$q++){
                if(strcmp($id,$res[$q])==0){
                    $count++;
                }
            }

            //if counter is greater than 0,timetable with the id is found
            if($count>0){

                Timetable::setTimetableId($id);

                $timetableService = new ITimetableServiceImplementation();
                $timetableService->deleteTimetable();

                //redirect user to the timetable_admin_delete_page with parameters of success and id in the URL
                $url = "../timetable_admin_delete_page.php?deleteMain=success&id=".$id;
                header('Location: '.$url);
            }

            //if counter is 0,timetable with the id is not found
            else {
                //redirect user to the timetable_admin_delete_page with parameters of notFound and id in the URL
                $url = "../timetable_admin_delete_page.php?deleteMain=notFound&id=".$id;
                header('Location: '.$url);
            }
        }
    }