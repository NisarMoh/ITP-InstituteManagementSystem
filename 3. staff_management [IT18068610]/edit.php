<?php
// including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM staff WHERE Staff_ID='$id'");

foreach ($result as $res) {

    $nic = $res['NIC'];
    $email = $res['Email'];
    $fullname = $res['Full_Name'];
    $lastname = $res['Last_Name'];
    $pass = $res['Password'];
    $conpass = $res['User_Name'];
    $quali = $res['Qualification'];
    $sal = $res['Salary'];
    $eth = $res['Ethnic'];
    $reg = $res['Religion'];
    $civil = $res['Civil_Status'];
    $address = $res['Address'];
    $gen = $res['Gender'];
    $dbo = $res['DateOfBirth'];
    $pno = $res['Phone_Number'];
    $admin = $res['Administrator'];
    $Tutor = $res['Tutor'];
    $cashier = $res['Cashier'];
}
?>
<!-- <html>

<head>
    <title>Edit Data</title>
    <script src="jquery/jquery-3.4.1.min.js"></script>
</head>

<body> -->

<br /><br />
<div class="card">
    <div class="card-body">

        <form action="editaction.php" method="post" name="form1">
            <table>
                <tbody>
                    <tr>
                        <th> Username</th>
                        <td><input type="text" class="form-control" id="confirm_password" value="<?php echo $conpass; ?>" name="cpass" required="" /></td>
                        <br>

                    </tr>
                    <tr>

                        <th>Full Name:</th>
                        <td><input type="text" class="form-control" name="fullname" required="" value="<?php echo $fullname; ?>" /></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><input type="text" class="form-control" name="lastname" required="" value="<?php echo $lastname; ?>" /></td>
                    </tr>


                    <tr>
                        <th>Email:</th>
                        <td><input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th>NIC Number:</th>
                        <td><input type="text" class="form-control" name="nic" value="<?php echo $nic; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" class="form-control" id="password" value="<?php echo $pass; ?>" name="upass" required="" /></td>
                    </tr>

                    <tr>
                        <th>Qualification:</th>
                        <td><input type="text" class="form-control" name="qualification" value="<?php echo $quali; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th>Ethnic</th>
                        <td>
                            <select name="ethnic" class="form-control" value="<?php echo $eth; ?>">

                                <?php

                                if ($eth == "Sinhalese") {
                                    echo '
                                            <option>--Select Ethnic</option>
                                            <option value="Sinhalese" selected="selected">Sinhalese</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Others">Others</option>
                                        ';
                                } else if ($eth == "Tamil") {
                                    echo '
                                        <option>--Select Ethnic</option>
                                        <option value="Sinhalese" >Sinhalese</option>
                                        <option value="Tamil" selected="selected">Tamil</option>
                                        <option value="Muslim" >Muslim</option>
                                        <option value="Others">Others</option>
                                        ';
                                } else if ($eth == "Muslim") {
                                    echo '
                                        <option>--Select Ethnic</option>
                                        <option value="Sinhalese" >Sinhalese</option>
                                        <option value="Tamil" >Tamil</option>
                                        <option value="Muslim" selected="selected" >Muslim</option>
                                        <option value="Others">Others</option>';
                                } else {
                                    echo '
                                        <option>--Select Ethnic</option>
                                        <option value="Sinhalese" >Sinhalese</option>
                                        <option value="Tamil" >Tamil</option>
                                        <option value="Muslim"  >Muslim</option>
                                        <option value="Others" selected="selected">Others</option>';
                                }

                                ?>
                                <option>--Select Ethnic</option>
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
                            <select name="religion" class="form-control" value="<?php echo $reg; ?>">
                                <?php

                                if ($eth == "Buddhists") {
                                    echo '
                                        <option value="Buddhists" selected="selected">Buddhists</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Christian">Christian</option>
                                        ';
                                } else if ($eth == "Hindu") {
                                    echo '
                                        <option value="Buddhists" selected="selected">Buddhists</option>
                                        <option value="Hindu" selected="selected">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Christian">Christian</option>';
                                } else if ($eth == "Muslim") {
                                    echo '
                                        <option value="Buddhists" selected="selected">Buddhists</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim" selected="selected">Muslim</option>
                                        <option value="Christian">Christian</option>';
                                } else {
                                    echo ' <option value="Buddhists" selected="selected">Buddhists</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Christian" selected="selected">Christian</option>
                                        ';
                                }

                                ?>
                                <option>--Select Religion</option>
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
                            <select name="civilstatus" class="form-control" value="<?php echo $civil; ?>">
                                <?php

                                if ($eth == "Single") {
                                    echo '
                                        <option>--Select Civil Status</option>
                                    <option value="single" selected="selected">Single</option>
                                    <option value="married">Married</option>
                                        ';
                                } else {
                                    echo ' <option>--Select Civil Status</option>
                                        <option value="single">Single</option>
                                        <option value="married" selected="selected">Married</option>
                                        ';
                                }

                                ?>
                                <option>--Select Civil Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th> Address :</th>
                        <td><input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th> Gender :</th>
                        <input type="hidden" id="getGender" value="<?php echo $gen; ?>" />
                        <td><input type="radio" id="genderSelect-Male" name="gender" value="Male" required="" />Male
                            <input type="radio" id="genderSelect-FeMale" name="gender" value="Female" />Female
                        </td>
                    </tr>
                    <tr>
                        <th> Date Of Birth :</th>
                        <td><input type="date" class="form-control" name="dob" value="<?php echo $dbo; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th> Phone Number :</th>
                        <td><input type="text" class="form-control" name="phonenumber" value="<?php echo $pno; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th> Salary :</th>
                        <td><input type="text" class="form-control" name="salary" value="<?php echo $sal; ?>" required="" /></td>
                    </tr>
                    <tr>
                        <th> Check admin :</th>
                        <td><input type="hidden" id="getadmin" value="<?php echo $admin; ?>" />
                            <input type="radio" id="getadminT" name="checkadmin" value="True" required="" />True
                            <input type="radio" id="getadminF" name="checkadmin" value="False" required="" />False
                        </td>
                    </tr>
                    <tr>
                        <th> Check Cashier :</th>
                        <td><input type="hidden" id="getcashier" value="<?php echo $admin; ?>" />
                            <input type="radio" id="getcashierT" name="checkcashier" value="True" required="" />True
                            <input type="radio" id="getcashierF" name="checkcashier" value="False" required="" />False
                        </td>
                    </tr>
                    <tr>
                        <th> Check Tutor: :</th>

                        <td><input type="hidden" id="gettutor" value="<?php echo $admin; ?>" />
                            <input type="radio" id="gettutorT" name="checktutor" value="True" required="" />True
                            <input type="radio" id="gettutorF" name="checktutor" value="False" required="" />False
                        </td>
                    </tr>

                    <tr>
                        <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" /></td>
                        <td><input type="submit" class="btn btn-success" name="update" value="update" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<!-- </body> -->

<script>
    $(document).ready(function() {
        var gender = $("#getGender").val();

        if (gender == "Male") {
            $("#genderSelect-Male").prop("checked", true);
        } else {
            $("#genderSelect-FeMale").prop("checked", true);
        }
    });
    $(document).ready(function() {
        var admin = $("#getadmin").val();

        if (admin == "True") {
            $("#getadminT").prop("checked", true);
        } else {
            $("#getadminF").prop("checked", false);
        }
    });
    $(document).ready(function() {
        var admin = $("#getcashier").val();

        if (admin == "True") {
            $("#getcashierT").prop("checked", true);
        } else {
            $("#getcashierF").prop("checked", false);
        }
    });
    $(document).ready(function() {
        var admin = $("#gettutor").val();

        if (admin == "True") {
            $("#gettutorT").prop("checked", true);
        } else {
            $("#gettutorF").prop("checked", false);
        }
    });
</script>

<!-- </html> -->