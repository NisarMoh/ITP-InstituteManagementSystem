<?php

function getUsername($ID) {

include '../2. notice_and_forum [IT18018356]/getDBconn.php';

    $sql1 ='SELECT User_Name
            FROM staff s
            WHERE s.Staff_ID = "'.$ID.'"';

    $sql2 ='SELECT username
            FROM student s
            WHERE s.id = "'.$ID.'"';

    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);

    if (!$result1) {
        $conn->error;
    } else {
        $row1 = $result1->fetch_assoc();
        $num1 = $result1->num_rows;

        if ($num1 > 0) {
            $uname = $row1['User_Name'];
            return $uname;
        }
    }

    if (!$result2) {
        $conn->error;
    } else {
        $row2 = $result2->fetch_assoc();
        $num2 = $result2->num_rows;

        if ($num2 > 0) {
            $uname = $row2['username'];
            return $uname;
        }
    }
}
?>