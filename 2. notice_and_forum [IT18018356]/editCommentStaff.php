<?php
    include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';
    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    require_once '../2. notice_and_forum [IT18018356]/getDBconn.php';

    $post_text = data_validation($_POST["comment_txt"]);
    $post_topic_id = data_validation($_GET['id']);
    $post_id = data_validation($_POST['id']);

    $sql = "UPDATE `institute_management_system`.`forum_post` 
            SET `post_text` = '$post_text' 
            WHERE (`post_id` = '$post_id');";

    $result = $conn->query($sql);

    if(!$result) {
        echo $conn->error;
    } else {
        redirect('../2. notice_and_forum [IT18018356]/viewTopicStaff.php?id='.$post_topic_id.'#'.$post_id);
    }

    function redirect($url) {
        header('Location: '.$url );
        exit();
    }
?>