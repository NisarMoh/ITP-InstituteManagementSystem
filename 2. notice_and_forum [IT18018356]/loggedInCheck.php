<?php

    session_start();
    
    if (isset($_SESSION['id'])) {

        //Do nothing
    } else {

        header('Location: ../index.php');
    }

?>