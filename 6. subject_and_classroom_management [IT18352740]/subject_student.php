<?php

$mysqli = new mysqli('localhost', 'username', 'password', 'institute_management_system')
or die(mysqli_errno($mysqli));
$output = '';
if (isset($_POST['search'])){
    $searchq = $_POST['search'];

    $query =  mysqli_query("SELECT * FROM subject WHERE subject LIKE '%$searchq%'") or die("could not search!");
    $count = mysqli_num_rows($query);
    if($count == 0){
        $output = 'There was no search result!';
    }
    else{
        while($row = mysqli_fetch_array($query)){
            $subject = $row['subject'];
            $id = $row['id'];

            $output.= '<div> '.$subject.'</div> ';
        }
    }
}

