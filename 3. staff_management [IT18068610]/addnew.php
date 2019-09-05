
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="style11.css" rel="stylesheet" />
	<title>Document</title>
</head>

<body>



	<div class="container ">
		<h1 class="well   text-light text-center"> Registration </h1>
		<div class="col-lg-12 well  card">
			<div class="row">
				<form method="post" name="form1" action="add.php">
					<div class="col-sm-12 ">
						<div class="  form-group">
							<label>User Name :</label><br>
							<input type="text" name="cpass" required="" class="form-Control" />
						</div>
						<div class="row">
							<div class="col-sm-6 form-group ">
								<label>First Name :</label>
								<input type="text" name="fullname" required="" class="nav-item form-Control" />
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name :</label>
								<input type="text" name="lastname" required="" class="form-Control" />
							</div>
						</div>
						<div class="form-group">
							<label>Email </label><br>
							<input type="email" name="email" required="" class="form-Control" />
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>NIC Number :</label>
								<input type="text" name="nic" required="" class="form-Control" />
							</div>
							<div class="col-sm-6 form-group">
								<label>Password :</label>
								<input type="password" id="password" name="upass" required="" class="form-Control" />
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
									<option>--Select Ethnic</option>
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
									<option>--Select Religion</option>
									<option value="Buddhists">Buddhists</option>
									<option value="Hindu">Hindu</option>
									<option value="Muslim">Muslim</option>
									<option value="Christian">Christian</option>
								</select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Civil Status :</label>
								<select name="civilstatus" class="form-control">
									<option>--Select Civil Status</option>
									<option value="single">Single</option>
									<option value="married">Married</option>
								</select>

							</div>

						</div>
						<div class=" form-group">
							<label>Address :</label><br>
							<input type="text" name="address" required="" class="form-Control" />
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
							<label>Phone :</label><br>
							<input type="text" name="phonenumber" required="" class="form-Control" />
						</div>
						<!-- <div class="row"> -->
						<div class=" form-group">
							<label>Salary :</label>
							<br>
							<input type="text" name="salary" required="" class="form-Control" />


						</div>

						<div class="form-group">
							<br>
							<label>Check admin :</label>

							<br>
							<input type="radio" name="checkadmin" required="" value="True" />True
							<input type="radio" name="checkadmin" required="" value="false" />false

						</div>

					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Check Cashier :</label>
							<br>
							<input type="radio" name="checkcashier" required="" value="True" />True
							<input type="radio" name="checkcashier" required="" value="false" />false

						</div>
						<div class="col-sm-6 form-group">
							<label>Check Tutor :</label>
							<br>
							<input type="radio" name="checktutor" required="" value="True" />True
							<input type="radio" name="checktutor" required="" value="false" />false

						</div>

					</div>

					<input class="btn btn-md btn-success" type="submit" name="Submit" value="Register" /><br><br>
					<!-- <button type="button" class="btn btn-lg btn-info">Submit</button> -->
					<!-- <a href="login.php" class="btn btn-lg btn-primary">Already registered! Click Here!</a> -->
					<br>
					<br>
			</div>
			</form>
		</div>
	</div>
	</div>

</body>

</html>