<?php
    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    include '../mysql_db_connection.inc.php';

    $post_text = data_validation($_POST["comment_txt"]);
    $post_poster_id = "STD2586";
    $post_topic_id = data_validation($_POST['id']);

    $sql = "INSERT INTO `institute_management_system`.`forum_post` (`post_text`, `post_poster_id`, `post_topic_id`)
            VALUES ('$post_text', '$post_poster_id', '$post_topic_id');";

    $result = $conn->query($sql);

    if(!$result) {
        echo $conn->error;
    } else {
        $sql2 = "SELECT post_id
                FROM forum_post
                WHERE post_text = '$post_text' AND post_poster_id ='$post_poster_id' AND post_topic_id = '$post_topic_id'";

        $result2 = $conn->query($sql2);

        $row = $result2->fetch_assoc();

        redirect('../2. notice_and_forum [IT18018356]/viewTopic.php?id='.$post_topic_id.'#'.$row["post_id"]);
    }

    function redirect($url) {
        header('Location: '.$url );
        exit();
    }
?>