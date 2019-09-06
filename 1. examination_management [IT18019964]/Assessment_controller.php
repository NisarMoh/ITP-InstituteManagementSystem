<?php
    /* CONTAINS ALL THE CONTROLLER CODE FOR THE ASSESSMENT CLASS */

    //Verification on global variable operation
    if (!isset($_GET['operation'])){
        header("Location: ../index.php");
    }

    include_once 'AssessmentCRUD.php';
    include_once 'Assessment.php';
    include_once 'Online_assessment.php';
    include_once 'Written_assessment.php';

    // Initialize the CRUD operation class
    $assessmentCRUD= new AssessmentCRUD();

    switch ($_GET['operation']){
        case 'insert':
            $assessment = new Online_assessment($_POST['type'],$_POST['title'],$_POST['subject'],$_POST['classroom'],$_POST['dateTime'],$_POST['duration']);

            $res = $assessmentCRUD->insertOnlineAssessment($assessment);

            echo $res;

            if ($res)
                header("Location: view_add_assessment.php?operation=success");
            else
                header("Location: view_add_assessment.php?operation=fail&error=".$assessmentCRUD->conn->error);

            break;

        case 'delete':
            $res = $assessmentCRUD->deleteAssessmentByID($_GET['id']);

            if ($res)
                header("Location: view_examination_list.php?operation=success&action=delete");
            else
                header("Location: view_assessment_details.php?operation=fail&action=delete&id=".$_GET['id']."&error=".$assessmentCRUD->conn->error);

            break;


        default:
            header("Location: ../index.php");

        /*case 'edit':
            echo "edit";
            break;



        case 'selectAll':
            echo "selectAll";
            break;*/

    }