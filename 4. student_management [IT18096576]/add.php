<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
    $age = $crud->escape_string($_POST['age']);
    $email = $crud->escape_string($_POST['email']);
    $contactno = $crud->escape_string($_POST['contactno']);
    $username = $crud->escape_string($_POST['username']);
    $password = $crud->escape_string($_POST['password']);

    //$password=md5($password);
    //insert data to database
    $sql = "INSERT INTO student (firstname, lastname, address, age, email, contactno, username, password) VALUES ('$firstname','$lastname','$address','$age','$email','$contactno','$username','$password')";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add member';
    }
 
    header('location: template_for_student_pages.php');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: index.php');
}
?>
