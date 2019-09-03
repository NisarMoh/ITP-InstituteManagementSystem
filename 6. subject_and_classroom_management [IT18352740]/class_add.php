<?php



$mysqli = new mysqli('localhost', 'username', 'password', 'institute_management_system')
or die(mysqli_errno($mysqli));
if (isset($_POST['btn_class_add'])){

    $class_add = $_POST["class_add"];
    $building_add = $_POST["building_add"];
    $numberofseats_add = $_POST["numberofseats_add"];
    $floorno_add = $_POST["floorno_add"];
    $options_ML = $_POST["options_ML"];
    $options_AC = $_POST["options_AC"];


    $mysqli->query("INSERT INTO classroom(classroom, building, number_of_seats, floor, multimedia, air_condition) 
VALUES ('$class_add', '$building_add', '$numberofseats_add', '$floorno_add','$options_ML','$options_AC')")
    or die($mysqli->error);

    $url = "class_add_class.php?value=success";

    header('location: '.$url);

}


if (isset($_GET["delete"])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM classroom WHERE hall_id = $id") or die($mysqli->error());

    $_SESSION['msg'] = "Record is successfully deleted";
    $_SESSION['alert'] = "alert alert-danger";

    header('location: class_view_class.php');
}