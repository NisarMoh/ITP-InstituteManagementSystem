<?php



$mysqli = new mysqli('localhost', 'username', 'password', 'payment')
or die(mysqli_errno($mysqli));
if (isset($_GET["delete"])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM fee WHERE TranasctionID = $id") or die($mysqli->error());

    $_SESSION['msg'] = "Record is successfully deleted";
    $_SESSION['alert'] = "alert alert-danger";

    header('cashier_home.php');
}