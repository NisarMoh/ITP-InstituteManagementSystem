<?php



         $mysqli = new mysqli('localhost', 'username', 'password', 'institute_management_system')
         or die(mysqli_errno($mysqli));

           $id = 0;
           $update = false;
           $subject_add = '';
           $reference_add = '';
           $description_add = '';
           $amount_add = '';

           # subject insert

         if (isset($_POST['btn_subject_add'])){

           $subject_add = $_POST["subject_add"];
           $reference_add = $_POST["reference_add"];
           $description_add = $_POST["description_add"];
           $amount_add = $_POST["amount_add"];

           $mysqli->query("INSERT INTO subject(subject, reference, decription, amount) VALUES ('$subject_add', '$reference_add', '$description_add', '$amount_add')") or die($mysqli->error);

           $url = "subject_staff_home.php?value=success";

           header('location: '.$url);

         }

         # subject delete

         if (isset($_GET["delete"])){
           $id = $_GET['delete'];
           $mysqli->query("DELETE FROM subject WHERE sub_id = $id") or die($mysqli->error());

           header('location: subject_staff_home.php');
         }

         # subject view detail

         if(isset($_GET["detail"]))
         {
             $id = $_GET['detail'];
              $url = "subject_view.php?id=".$id;
             header('location:'. $url);
         }

         # subject edit

         if(isset($_GET['edit'])){
             $id = $_GET['edit'];
             $update = true;



             $result = $mysqli->query("SELECT * FROM data WHERE sub_id= $id") or die($mysqli->error());
             if(count($result) == 1){
                 $row = $result->fetch_array();
                 $subject_add = $row['subject_add'];
                 $reference_add = $row['reference_add'];
                 $description_add = $row['description_add'];
                 $amount_add = $row['amount_add'];
         }
         }

         if (isset($_POST['btn_subject_update'])){
             $id = $_POST['sub_id'];
             $subject_add = $_POST['subject_add'];
             $reference_add = $_POST['reference_add'];
             $description_add = $_POST['description_add'];
             $amount_add = $_POST['amount_add'];

             $mysqli->query("UPDATE dat SET subject_add='$subject_add', reference_add='$reference_add', description_add='  $description_add', amount_add='$amount_add' WHERE sub_id = $id")
                 or die($mysqli->error);

         }