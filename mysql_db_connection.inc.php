<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "institute_management_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);

    // Check connection
    if ($conn->connect_error) {
        die("MySQL database connection failed: " . $conn->connect_error);
    }
