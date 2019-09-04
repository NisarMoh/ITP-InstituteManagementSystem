<?php 
//include_once('validation.php');

?>


<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name="viewport" content = "width-device=width, initial-scale=1"/>
		<title>Login Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
<body>

	<div class = "row">
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 well">
			<h4 class = "text-danger">Login Form</h4>
			<hr style = "border-top:1px dotted #000;"/>
			<form method = "POST" action = "login_query.php">
				<div class="form-group">
					<input type = "text" placeholder = "Username"  name = "username" class = "form-control" required = "required"/>
				</div>
				<div class="form-group">
					<input type = "password" placeholder = "Password"  name = "password" class = "form-control" required = "required">
				</div>
				<button class = "btn btn-primary pull-left" name = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
                                <label class = "pull-right">Don't have an account yet? <a href = "reg.php"> Click here</a></label>
                                <!--<a class = "btn btn-primary pull-left" href="index.php">Login</a>-->
			</form>
		</div>
	</div>
</body>
</html>

