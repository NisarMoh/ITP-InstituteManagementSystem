<?php
//start session
session_start();
 
//including the database connection file
include_once('Crud.php');
 
//getting the id
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
    $age = $crud->escape_string($_POST['age']);
    $email = $crud->escape_string($_POST['email']);
    $contactno = $crud->escape_string($_POST['contactno']);
    $username = $crud->escape_string($_POST['username']);
    $password = $crud->escape_string($_POST['password']);
    $password=md5($password);
 
    //update data
    $sql = "UPDATE student SET firstname = '$firstname', lastname = '$lastname', address = '$address', age = '$age', email = '$email', contactno = '$contactno', username = '$username', password = '$password' WHERE id = '$id'";
 
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update member';
    }
 
    header('location: template_for_student_pages.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: index.php');
}
?>
