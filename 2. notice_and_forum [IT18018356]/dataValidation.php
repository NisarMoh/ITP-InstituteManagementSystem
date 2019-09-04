<?php

    function data_validation($data) {

        include '../mysql_db_connection.inc.php';

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data =  $conn->real_escape_string($data);

        return $data;

    }
?>