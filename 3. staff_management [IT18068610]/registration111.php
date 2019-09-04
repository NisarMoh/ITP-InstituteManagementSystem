<?php
include_once 'user.php';
$user = new User(); // Checking for user logged in or not

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $register = $user->reg_user($nic,$email,$fullname,$lastname,$Username,$upass,$qualification,$ethnic,$religion,$civilstatus,$address,$gender,$dob,$phonenumber);
    if ($register) {
        // Registration Success
       // header("location:login.php");
     echo 'Registration successful <a href="login.php">Click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

Register
<style>
    <!--
    #container {
        width: 400px;
        margin: 0 auto;
    }
    -->
</style>

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
<div id="container">
    <h1>Registration Here</h1>
    <form action="" method="post" name="reg">
        <table>
            <tbody>
            <tr>
                    <th>User Name:</th>
                    <td><input type="text" name="Username" required="" /></td>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><input type="text" name="fullname" required="" /></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><input type="text" name="lastname" required="" /></td>
                </tr>
               
                
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="email" required="" /></td>
                </tr>
                <tr>
                    <th>NIC Number:</th>
                    <td><input type="text" name="nic" required="" /></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" id="password" name="upass" required="" /></td>
                </tr>
                
                <tr>
                    <th>Qualification:</th>
                    <td><input type="text" name="qualification" required="" /></td>
                </tr>
                <tr>
                    <th>Ethnic</th>
                    <td>
                    <select name="ethnic">
                    <option >--Select Ethnic</option>
                    <option value="Sinhalese">Sinhalese</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Others">Others</option>
                    </select> 
                    </td>
                </tr>
                <tr>
                    <th>Religion:</th>
                    <td>
                    <select name="religion">
                    <option >--Select Religion</option>
                    <option value="Buddhists">Buddhists</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Christian">Christian</option>
                    </select>           
                </td>
                </tr>
                <tr>
                    <th>Civil Status:</th>
                    <td>
                    <select name="civilstatus">
                    <option >--Select Civil Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    </select>           
                </td>
                </tr>

                <tr>
                    <th> Address :</th>
                    <td><input type="text" name="address" required="" /></td>
                </tr>
                <tr>
                    <th> Gender :</th>
                    <td><input type="radio" name="gender" required="" />Male
                    <input type="radio" name="gender" required="" />Female
                    </td>
                </tr>
                <tr>
                    <th> Date Of Birth :</th>
                    <td><input type="date" name="dob" required="" /></td>
                </tr>
                <tr>
                    <th> Phone Number :</th>
                    <td><input type="text" name="phonenumber" required="" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input onclick="return(submitreg());" type="submit" name="submit" value="Register" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="login.php">Already registered! Click Here!</a></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

