<?php
// define variables and set to empty values
$Message = $ErrorUname = $ErrorPass = $ErrorEmail = $ErrorName = "";
$username = $password = $email = $fullname = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $ErrorUname = "Userame is required";
  } else {
    $username = check_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      $ErrorUname = "Space and special characters not allowed but you can use underscore(_)."; 
    }
	else{
		$fusername=$username;
	}
  }
 
  if (empty($_POST["password"])) {
    $ErrorPass = "Password is required";
  } else {
    $fpassword = check_input($_POST["password"]);
  }
 
  if (empty($_POST["email"])) {
    $ErrorEmail = "Email is required";
  } else {
    $email = check_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $ErrorEmail = "Invalid email format"; 
    }
	else{
		$femail=$email;
	}
  }
 
 if (empty($_POST["fullname"])) {
    $ErrorName = "Full name is required";
  } else {
    $fullname = check_input($_POST["fullname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $ErrorName = "Only letters and white space allowed"; 
    }
	else{
		$ffullname=$fullname;
	}
  }
  ?>       