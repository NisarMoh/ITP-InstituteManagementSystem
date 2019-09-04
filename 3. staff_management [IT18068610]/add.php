<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    //including the database connection file
    include_once("classes/Crud.php");
    include_once("classes/Validation.php");

    $crud = new Crud();
    $validation = new Validation();

    if (isset($_POST['Submit'])) {
        $fullname = $crud->escape_string($_POST['fullname']);
        $lastname = $crud->escape_string($_POST['lastname']);
        $email = $crud->escape_string($_POST['email']);
        $nic = $crud->escape_string($_POST['nic']);
        $upass = $crud->escape_string($_POST['upass']);
        $cpass = $crud->escape_string($_POST['cpass']);
        $qualification = $crud->escape_string($_POST['qualification']);
        $ethnic = $crud->escape_string($_POST['ethnic']);
        $religion = $crud->escape_string($_POST['religion']);
        $civilstatus = $crud->escape_string($_POST['civilstatus']);
        $address = $crud->escape_string($_POST['address']);
        $gender = $crud->escape_string($_POST['gender']);
        $dob = $crud->escape_string($_POST['dob']);
        $phonenumber = $crud->escape_string($_POST['phonenumber']);
        $salary = $crud->escape_string($_POST['salary']);
        $checkadmin = $crud->escape_string($_POST['checkadmin']);
        $checkcashier = $crud->escape_string($_POST['checkcashier']);
        $checktutor = $crud->escape_string($_POST['checktutor']);


        $msg = $validation->check_empty($_POST, array('fullname', 'lastname', 'email', 'nic', 'upass', 'cpass', 'qualification', 'ethnic', 'religion', 'civilstatus', 'address', 'gender', 'dob', 'phonenumber', 'salary', 'checkadmin', 'checkcashier', 'checktutor'));
        $check_phone = $validation->is_age_valid($_POST['phonenumber']);
        $check_email = $validation->is_email_valid($_POST['email']);

        // checking empty fields
        if ($msg != null) {
            echo $msg;
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } elseif (!$check_phone) {
            echo 'Please provide proper age.';
        } elseif (!$check_email) {
            echo 'Please provide proper email.';
        } else {
            // if all the fields are filled (not empty) 

            //insert data to database    
            $result = $crud->execute("INSERT INTO staff (Full_Name, Last_Name, Email,NIC,Password,User_Name,Qualification,Salary,Ethnic,Religion,Civil_Status,Address,Gender,DateOfBirth,Phone_Number,Administrator,Tutor,Cashier) VALUES 
            ('$fullname', '$lastname', '$email','$nic','$upass','$cpass','$qualification','$salary','$ethnic','$religion','$civilstatus','$address','$gender','$dob','$phonenumber','$checkadmin','$checktutor','$checkcashier')");

            //display success message
            //echo "<font color='green'>Data added successfully.";
            // echo "<br/><a href='template_Crud.php'>View Result</a>";
            header("Location:template_Crud.php");
        }
    }
    ?>
</body>

</html>