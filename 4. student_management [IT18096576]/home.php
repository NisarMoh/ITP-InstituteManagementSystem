<!DOCTYPE html>
<?php
	require_once 'session.php';
	require 'class.php';
?>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name= "viewport" content = "width-device=width, initial-scale=1"/>
		<title>Home Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
<body>
<a href = "logout.php" >Logout</a>
	
	
			<?php
				$id = $_SESSION['id'];
				$conn = new db_class();
				$user = $conn->user_account($id);
				echo '<center><h4 class = "text-success">'.$user['firstname'].' '.$user['lastname'].'</h4></center>';
			?>
			

			<?php  
			include 'crudadd.php'
			?>
		
</body>
</html>
