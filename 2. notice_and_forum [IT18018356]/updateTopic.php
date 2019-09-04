<?php
    session_start();

    include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';
    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    require_once '../2. notice_and_forum [IT18018356]/getDBconn.php';

    $topic_name = data_validation($_POST["topic_name"]);
    $topic_description = data_validation($_POST["topic_description"]);
    $topic_category_id = $_POST["topic_category"];
    $topic_id = data_validation($_GET['topic_id']);

    $sql = "SELECT topic_op_id 
            FROM institute_management_system.forum_topic
            WHERE topic_id = ".$topic_id;

    

    $result = $conn->query($sql);
    if (!$result) {
        echo $conn->error;
    } else {
        $row = $result->fetch_assoc();

        if ($_SESSION['id'] == $row['topic_op_id']) {

            $sql2 = "UPDATE `institute_management_system`.`forum_topic` 
                     SET `topic_text` = '$topic_name', `topic_category_id` = '$topic_category_id', `topic_description` = '$topic_description' 
                     WHERE (`topic_id` = '$topic_id');";

            $result2 = $conn->query($sql2);

            if(!$result2) {
                echo $conn->error;
            } else {
                redirect('../2. notice_and_forum [IT18018356]/viewTopic.php?id='.$topic_id);
            }
        } else {
            redirect('../error.php');
        }
    }



    

    function redirect($url) {
        header('Location: '.$url );
        exit();
    }
?>