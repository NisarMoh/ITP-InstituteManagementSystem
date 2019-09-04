<?php

    function data_validation($data) {

        include '../2. notice_and_forum [IT18018356]/getDBconn.php';

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data =  $conn->real_escape_string($data);

        return $data;

    }
?>