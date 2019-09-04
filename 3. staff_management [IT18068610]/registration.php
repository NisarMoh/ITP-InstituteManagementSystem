<?php
session_start();
include_once 'user.php';
$user = new User(); // Checking for user logged in or not

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $register = $user->reg_user($nic,$email,$fullname,$lastname,$Username,$upass,$qualification,$ethnic,$religion,$civilstatus,$address,$gender,$dob,$phonenumber);
    if ($register) {
		// Registration Success
		$_SESSION['message']='Registration successful';
       header("location:login.php");
     //echo '<h2 class="text-light">Registration successful <a class="text-success" href="login.php">Click here</a> to login</h2>';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<script type="text/javascript" language="javascript">
    function submitreg() {
        var form = document.reg;
        if (form.name.value == "") {
            alert("Enter name.");
            return false;
        } else if (form.uname.value == "") {
            alert("Enter username.");
            return false;
        } else if (form.upass.value == "") {
            alert("Enter password.");
            return false;
        } else if (form.uemail.value == "") {
            alert("Enter email.");
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="style11.css" rel="stylesheet" />
	<title>Document</title>
</head>

<body >



	<div class="container ">
		<h1 class="well card bg-primary text-light text-center"> Registration</h1>
		<div class="col-lg-12 well  card">
			<div class="row">
				<form method="post" name="reg" action="">
					<div class="col-sm-12 ">
						<div class="form-group">
							<label>User Name :</label>
							<input type="text" name="Username" required="" class="form-Control" />						
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name :</label>
								<input type="text" name="fullname" required="" class="form-Control" />	
													</div>
							<div class="col-sm-6 form-group">
								<label>Last Name :</label>
								<input type="text" name="lastname" required="" class="form-Control" />						
								</div>
						</div>
						<div class="form-group">
							<label>Email </label>
							<input type="email" name="email" required="" class="form-Control" />					
							</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>NIC Number :</label>
								<input type="text" name="nic" required="" class="form-Control" />						
								</div>
							<div class="col-sm-6 form-group">
								<label>Password :</label>
								<input type="password" id="password" name="upass" required=""  class="form-Control"/>						
								</div>

						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Qualification :</label>
								<input type="text" name="qualification" required="" class="form-Control" />	
														</div>
							<div class="col-sm-6 form-group">
								<label>Ethnic :</label>
								<select name="ethnic" class="form-control">
								<option >--Select Ethnic</option>
								<option value="Sinhalese">Sinhalese</option>
								<option value="Tamil">Tamil</option>
								<option value="Muslim">Muslim</option>
								<option value="Others">Others</option>
								</select>    					
								</div>

						</div>
						<div class="row">
						<div class="col-sm-6 form-group">
								<label>Religion :</label>
							    <select name="religion" class="form-control">
								<option >--Select Religion</option>
								<option value="Buddhists">Buddhists</option>
								<option value="Hindu">Hindu</option>
								<option value="Muslim">Muslim</option>
								<option value="Christian">Christian</option>
                    </select>     
								</div>
							<div class="col-sm-6 form-group">
								<label>Civil Status :</label>
								<select name="civilstatus" class="form-control">
								<option >--Select Civil Status</option>
								<option value="single">Single</option>
								<option value="married">Married</option>
								</select>  
														
								</div>

						</div>
						<div class=" form-group">
								<label>Address :</label>
								<input type="text" name="address" required="" class="form-Control"/>
															</div>
						<div class="row">
						<div class="col-sm-6 form-group">
								<label>Gender :</label>
								<br>
								<input type="radio" name="gender" required="" value="Male" />Male
 								<input type="radio" name="gender" required="" value="Female" />Female
							    
								</div>
							<div class="col-sm-6 form-group">
								<label>Date Of Birth :</label>
								<input type="date" name="dob" required="" class="form-Control" />
														
								</div>

						</div>									
						<div class="form-group">
								<label>Phone :</label>
								<input type="text" name="phonenumber" required="" class="form-Control"/>
															</div>
						
															<input class="btn btn-md btn-success" onclick="return(submitreg());" type="submit" name="submit" value="Register" /><br><br>
						<!-- <button type="button" class="btn btn-lg btn-info">Submit</button> -->
						<a href="login.php" class="btn btn-lg btn-primary">Already registered! Click Here!</a>
						<br>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>