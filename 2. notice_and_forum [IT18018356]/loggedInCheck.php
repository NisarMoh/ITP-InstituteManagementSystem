<?php

session_start();

if (isset($_SESSION['id'])) {

    //do Nothing
} else if (isset($_SESSION['Staff_ID'])) {

    // include '../3. staff_management [IT18068610]/user.php ';
    // $user = new user();
} else {

    header('Location: ../index.php');
}
