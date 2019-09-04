<?php

include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';

    $sql = "UPDATE forum_topic
           SET topic_visit_counter = topic_visit_counter + 1
           WHERE topic_id = ".$conn->real_escape_string($_GET['id']);

    $conn->query($sql);

?>