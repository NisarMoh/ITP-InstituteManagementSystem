<?php
    include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';
    include '../2. notice_and_forum [IT18018356]/dataValidation.php';
    require_once '../2. notice_and_forum [IT18018356]/getDBconn.php';

    $category_name = data_validation($_POST["category_name"]);
    $category_description = data_validation($_POST["category_description"]);

    $sql = "SELECT * 
            FROM `institute_management_system`.`forum_category`
            WHERE category_name = '$category_name'";

    $result = $conn->query($sql);
    $row_count = $result->num_rows;

    if ($row_count == 0) {

        $sql1 = "INSERT INTO `institute_management_system`.`forum_category` (`category_name`, `category_description`) 
                VALUES ('$category_name', '$category_description');";

        $result1 = $conn->query($sql1); 

        if (!$result1) {
            echo $conn->error;
        } else {

            $sql2 = "SELECT category_id
                    FROM forum_category
                    WHERE category_name = '$category_name'";

            $result2 = $conn->query($sql2);

            $row = $result2->fetch_assoc();

            redirect('../2. notice_and_forum [IT18018356]/viewCategory.php?id='.$row['category_id']);
        }

    } else {
        $previous = "javascript:history.go(-1)";
        redirect($previous."?error=already_Exists");
    }

     

    
    function redirect($url) {
        header('Location: '.$url );
        exit();
    }

?>