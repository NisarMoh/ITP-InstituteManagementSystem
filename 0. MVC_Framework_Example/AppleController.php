<?php
    /* CONTAINS ALL THE CONTROLLER CODE FOR THE APPLE CLASS */


    //Verification on global variable operation
    if (!isset($_GET['operation'])){
        header("Location: ../index.php");
    }

    include_once 'AppleCRUD.php';
    include_once 'Apple.php';

    // Initialize the CRUD operation class
    $appleCRUD = new AppleCRUD();

    switch ($_GET['operation']){
        case 'insert':
            $apple = new Apple();
            $apple->setName($_POST['name']);
            $apple->setAge($_POST['age']);

            $res = $appleCRUD->insert($apple);

            if ($res)
                header("Location: insertApple.php?operation=success");
            else
                header("Location: ../index.php?operation=fail&error=".$appleCRUD->conn->error);

            break;

        default:
            header("Location: ../index.php");

        /*case 'edit':
            echo "edit";
            break;

        case 'remove':
            echo "remove";
            break;

        case 'selectAll':
            echo "selectAll";
            break;*/

    }