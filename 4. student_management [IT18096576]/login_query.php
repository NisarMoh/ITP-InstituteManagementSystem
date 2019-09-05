<?php

	require_once 'class.php';
	if(ISSET($_POST['login'])){
		$conn = new db_class();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$get_user = $conn->login($username, $password);
		
		if($get_user['count'] > 0){
			session_start();
			$_SESSION['id'] = $get_user['id'];
			//$_SESSION['user_name'] = $get_user['username'];
                        //echo $get_user['user_id'];
			echo '<script>alert("Successfully login!")</script>';
			echo '<script>window.location = "template_for_student_pages.php"</script>'; 
                        //header("Loation:hoe.php");
                       


		}else{
			echo '<script>alert("Invalid username or password")</script>';
			echo '<script>window.location = "index.php"</script>';
		}
	}
?>

