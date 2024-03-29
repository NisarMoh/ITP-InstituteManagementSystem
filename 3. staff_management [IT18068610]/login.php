<?php
session_start();
include_once 'user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
	extract($_REQUEST);
	$login = $user->check_login($emailusername, $password);
	if ($login) {
		if (($_SESSION['Administrator'] == "True")) {
			
			header("location:template_for_staff_pages.php");
		}
		
		
		else {
			header("location:../dashboard_for_staff/tutor_view.php");
			
		}
		//Registration Success

	} else {
		// Registration Failed
		echo 'Wrong username or password';
	}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" language="javascript">
	function submitlogin() {
		var form = document.login;
		if (form.emailusername.value == "") {
			alert("Enter email or username.");
			return false;
		} else if (form.password.value == "") {
			alert("Enter password.");
			return false;
		}
	}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div>
		<?php
		if (isset($_SESSION['message'])) {
			?>
			<div class="alert alert-info text-center">
				<?php echo $_SESSION['message']; ?>

			</div>
		<?php
			unset($_SESSION['message']);
		}
		?>

	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img2.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" name="login" action="">
					<span class="login100-form-title">
						Log In
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" aria-describedby="emailHelp" id="exampleInputEmail1" type="text" name="emailusername" placeholder="Email |User Name" required="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" id="exampleInputPassword1" name="password" type="password" placeholder="Password" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input onclick="return(submitlogin());" type="submit" name="submit" class="login100-form-btn" value="Login" />


					</div>



					<div class="text-center p-t-136">
						<a class="txt2" href="registration.php">
							Create Register
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script type="text/javascript" language="javascript">
		function submitlogin() {
			var form = document.login;
			if (form.emailusername.value == "") {
				alert("Enter email or username.");
				return false;
			} else if (form.password.value == "") {
				alert("Enter password.");
				return false;
			}
		}
	</script>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>