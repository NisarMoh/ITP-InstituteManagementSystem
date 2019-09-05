<?php
	require_once "class.php";
	$conn = new db_class();
	if(ISSET($_POST['signup'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
                $gender = $_POST['gender'];
                $age = $_POST['age'];
                $contactno = $_POST['contactno'];
                $email = $_POST['email'];
				$address = $_POST['address'];
				
                
		$conn->save($username, $password, $firstname, $lastname, $gender, $age, $contactno, $email, $address);
		echo '<script>alert("Successfully saved!")</script>';
		echo '<script>window.location= "index.php"</script>';
	}	
?>