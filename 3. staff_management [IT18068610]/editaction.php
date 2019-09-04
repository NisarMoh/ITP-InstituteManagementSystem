<?php
// including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();

 
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
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
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } elseif (!$check_phone) {
        echo 'Please provide proper phone.';
    } elseif (!$check_email) {
        echo 'Please provide proper email.';    
    } else {    
        //updating the table
        $sql = "UPDATE staff SET Full_Name='$fullname',Last_Name='$lastname',Email='$email', NIC='$nic', Password='$upass', User_Name='$cpass',Qualification='$qualification',Salary='$salary',Ethnic='$ethnic',Religion='$religion',Civil_Status='$civilstatus',Address='$address',Gender='$gender',DateOfBirth='$dob',Phone_Number='$phonenumber',Administrator='$checkadmin',Tutor='$checktutor',Cashier='$checkcashier' WHERE Staff_ID ='$id';";
        $result = $crud->execute($sql);
    //    $sqlq="UPDATE staff SET Full_Name='$fullname',Last_Name='$lastname',Email='$email', NIC='$nic', Password='$upass', Confirm_Pass='$cpass',Qualification='$qualification',Salary='$salary',Ethnic='$ethnic',Religion='$religion',Civil_Status='$civilstatus',Address='$address',Gender='$gender',DateOfBirth='$dob',Phone_Number='$phonenumber',Administrator='$checkadmin',Tutor='$checktutor',Cashier='$checkcashier' WHERE Staff_ID ='$id'";
    //     if(!$result){
    //         echo $crud->execute($sqlq);  
    //         echo $id;         
    // //     }
    // if($result==true){
    //     echo "true";
    // }
    // else{
    //     echo "false";
    // }
    
        //redirectig to the display page. In our case, it is index.php
        header("Location: template_Crud.php");
       
    }
}
