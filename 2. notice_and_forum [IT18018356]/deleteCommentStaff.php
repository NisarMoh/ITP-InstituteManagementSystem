<?php
    session_start();

    include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';
    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    require_once '../2. notice_and_forum [IT18018356]/getDBconn.php';

    $post_id = data_validation($_GET['post_id']);
    $post_topic_id = data_validation($_GET['topic_id']);

    $sql = "SELECT post_poster_id 
            FROM institute_management_system.forum_post 
            WHERE post_id='$post_id';";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($_SESSION['id'] == $row['post_poster_id']) {

        $sql2 = "DELETE FROM `institute_management_system`.`forum_post`
                 WHERE (`post_id` = '$post_id');";

        $result2 = $conn->query($sql2);

        if(!$result2) {
            echo $conn->error;
        } else {
            redirect('../2. notice_and_forum [IT18018356]/viewTopicStaff.php?id='.$post_topic_id.'#'.$row["post_id"]);
        }
    }

    function redirect($url) {
        header('Location: '.$url );
        exit();
    }
?>