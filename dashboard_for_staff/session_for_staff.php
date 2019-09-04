<?php
    // session for staff


session_start();
include_once '../3. staff_management [IT18068610]/user.php';
$user = new User();
$Staff_ID = $_SESSION['Staff_ID'];
if (!$user->get_session()) {
    header("location:login.php");
}

