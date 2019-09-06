<?php

    include_once '../DatabaseConnection.php';
    $conn = DatabaseConnection::getInstance()->getConnection();

    function getSubjectList(){
        $sql = "SELECT sub_id,subject FROM `subject` ";

        $result = $GLOBALS['conn']->query($sql);
        $sub = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $sub[$row["sub_id"]] = $row["subject"];
            }
        }

        return $sub;
    }

    function getClassroomList(){
        $sql = "SELECT hall_id,classroom FROM `classroom` ";

        $result = $GLOBALS['conn']->query($sql);
        $cr= array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $cr[$row["hall_id"]] = $row["classroom"];
            }
        }

        return $cr;
    }

    function getStaffList(){
        $sql = "SELECT Staff_ID,Full_Name FROM `staff` ";

        $result = $GLOBALS['conn']->query($sql);
        $st= array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $st[$row["Staff_ID"]] = $row["Full_Name"];
            }
        }

        return $st;
    }

    function getStudentList(){
        $sql = "SELECT id,firstname FROM `student` ";

        $result = $GLOBALS['conn']->query($sql);
        $std= array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $std[$row["id"]] = $row["firstname"];
            }
        }

        return $std;
    }



    function getSubjectNameById($para){
        $sql = "SELECT subject FROM `subject` WHERE sub_id = '".$para."' ";
        $result = $GLOBALS['conn']->query($sql);
        $row = $result->fetch_assoc();
        return  $row["subject"];
    }

function getClassRoomById($para){
    $sql = "SELECT classroom FROM `classroom` WHERE hall_id = '".$para."' ";
    $result = $GLOBALS['conn']->query($sql);
    $row = $result->fetch_assoc();
    return  $row["classroom"];
}