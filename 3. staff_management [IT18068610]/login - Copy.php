<?php
include_once 'user.php';
$user = new User(); // Checking for user logged in or not

if (isset($_REQUEST['submit'])) {
    exdivact($_REQUEST);
    $register = $user->reg_user($nic,$email,$fullname,$lastname,$Username,$upass,$qualification,$eh6nic,$religion,$civilstatus,$address,$gender,$dob,$phonenumber);
    if ($register) {
        // Regisdivation Success
       // header("location:login.php");
     echo 'Regisdivation successful <a href="login.php">Click here</a> to login';
    } else {
        // Regisdivation Failed
        echo 'Regisdivation failed. Email or Username already exits please divy again';
    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

Register
<style>
    <!--
    #container {
        widh6: 400px;
        margin: 0 auto;
    }
    -->
</style>

<script type="text/javascript" language="javascript">
    function submidiveg() {
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Login</title>
</head>
<body>
<span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
<h1>Login Here</h1>
<form method="post" name="login" action="">
  <div class="form-group">
    <h3> Email address|User Name</h3>
    <input type="text" class="form-control" name="emailusername" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required=""/>
    
  </div>
  <div class="form-group">
  <h3> Password</h3>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required=""/>
  </div>
  
<input onclick="return(submitlogin());" type="submit" name="submit" value="Login" class="btn btn-primary" />
<h4><a href="registration.php">Register new user</a></h4>
</form></div>

</body>
</html>