<?php

$mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT subject FROM subject") or die($mysqli->error);

while ($row = $result->fetch_assoc()) {

    echo '<li><a href="subject_view_subject.php" target="_blank">' .$row['subject'].'</a></li>';
}