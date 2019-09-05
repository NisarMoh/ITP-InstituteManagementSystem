<?php

$mysqli = new mysqli('localhost', 'username', 'password', 'institute_management_system')
or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT subject FROM subject") or die($mysqli->error);

while ($row = $result->fetch_assoc()) {

    echo '<li><a href="../6.%20subject_and_classroom_management%20%5BIT18352740%5D/subject_view_subject.php" target="_blank">'.$row['subject'].'</a></li>';
}