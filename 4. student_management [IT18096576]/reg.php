<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name ="viewport" content = "width-device=width, initial-scale=1"/>
		<title>Registration Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
<body>

	<div class = "row">
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 well">
			<h4 class = "text-danger">Registration Form</h4>
			<hr style = "border-top:1px dotted #000;"/>
			<form method = "POST" action = "save_query.php">
				<div class="form-group">
					Username:<input type = "text" placeholder = "Username"  name = "username" class = "form-control"/>
				</div>
				<div class="form-group">
					Password:<input type = "password" placeholder = "Password"  name = "password" class = "form-control">
				</div>
				<div class="form-group">
					FirstName:<input type = "text" placeholder = "Firstname"  name = "firstname" class = "form-control"/>
				</div>
				<div class="form-group">
					LastName:<input type = "text" placeholder = "Lastname"  name = "lastname" class = "form-control"/>
				</div>
                               <div class="form-group">
                                   Gender:<input type = "radio" name ="gender" value="male" />Male<input type = "radio" name ="gender" value="female"/>Female
				</div>
                                <div class="form-group">
                                    Age:<input type = "int" placeholder = "Age"  name = "age" class = "form-control"/>
				</div>
                                <div class="form-group">
                                    Contact NO:<input type = "int" placeholder = "contactno"  name = "contactno" class = "form-control"/>
				</div>
                                <div class="form-group">
                                    Email:<input type = "email" placeholder = "Enter Email"  name = "email" class = "form-control"/>
				</div>
                                 <div class="form-group">
                                     Address:<textarea name = "address" placeholder="Enter Address" class = "form-control"></textarea>
				</div>
                                 <button class = "btn btn-success" name = "signup"><span class = "glyphicon glyphicon-log-in"></span> Register </button>
                                <label class = "pull-right">If you have an account yet? <a href = "index.php"> Click here</a></label>
			</form>
		</div>
	</div>
</body>
</html>