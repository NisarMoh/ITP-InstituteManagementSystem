<?php

    $sql = "UPDATE forum_topic
           SET topic_visit_counter = topic_visit_counter + 1
           WHERE topic_id = ".$conn->real_escape_string($_GET['id']);

    $conn->query($sql);

?>