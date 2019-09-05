<?php



$mysqli = new mysqli('localhost', 'username', 'password', 'payment')
or die(mysqli_errno($mysqli));
if (isset($_POST['submit_payment'])){

    $Student_id = $_POST["StudentId"];
    $Subject_id = $_POST["SubjectId"];
    $Amount = $_POST["Amount"];
    $Month = $_POST["Month"];
    $Year = $_POST["Year"];
    $Cashier_ID = $_POST["CashierID"];


    $mysqli->query("INSERT INTO fee(StudentID, SubjectId, Amount, Month , Year, CashierID) 
VALUES ('$Student_id', '$Subject_id', '$Amount', '$Month','$Year','$Cashier_ID')")
    or die($mysqli->error);

    $url = "class_add_class.php?value=success";

    header('location: '.$url);

}