<?php

    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    include '../mysql_db_connection.inc.php';

    $topic_name = data_validation($_POST["topic_name"]);
    $topic_description = data_validation($_POST["topic_description"]);
    $topic_category_id = $_POST["topic_category"];
    $topic_poster_id = "STD4562";

    $sql = "INSERT INTO `institute_management_system`.`forum_topic` (`topic_text`, `topic_op_id`, `topic_category_id`, `topic_description`) 
            VALUES ('$topic_name', '$topic_poster_id', '$topic_category_id', '$topic_description');";

    $result = $conn->query($sql); 

    if (!$result) {
        echo $conn->error;
    } else {

        $sql2 = "SELECT topic_id
                FROM forum_topic
                WHERE topic_text = '$topic_name' AND topic_op_id ='$topic_poster_id' AND topic_category_id = '$topic_category_id' AND topic_description = '$topic_description'";

        $result2 = $conn->query($sql2);

        $row = $result2->fetch_assoc();

        redirect('../2. notice_and_forum [IT18018356]/viewTopic.php?id='.$row['topic_id']);
    }  

    
    function redirect($url) {
        header('Location: '.$url );
        exit();
    }

?>
