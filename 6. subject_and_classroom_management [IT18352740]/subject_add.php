<?php



       $mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
       or die(mysqli_errno($mysqli));

       $update = false;
        $subject_add = '';
        $reference_add = '';
        $decription_add = '';
            $amount_add = '';

       if (isset($_POST['btn_subject_add'])){

           $subject_add = $_POST["subject_add"];
           $reference_add = $_POST["reference_add"];
           $decription_add = $_POST["decription_add"];
           $amount_add = $_POST["amount_add"];

           $mysqli->query("INSERT INTO subject(subject, reference, decription, amount) 
VALUES ('$subject_add', '$reference_add', '$decription_add', '$amount_add')")
               or die($mysqli->error);

          $url = "subject_add_subject.php?value=success";

            header('location: '.$url);

       }


       if (isset($_GET["delete"])){
           $id = $_GET['delete'];
           $mysqli->query("DELETE FROM subject WHERE sub_id = $id") or die($mysqli->error());

           header('location: subject_view_subject.php');
       }
        if (isset($_GET['edit'])){
            $id = $_GET['edit'];
            $update = true;
            $result = $mysqli->query("SELECT * FROM subject WHERE sub_id = $id") or die($mysqli->error());
            if (count($result)==1){
                $row = $result-> fetch_array();
                $subject_add = $row["subject_add"];
                $reference_add = $row["reference_add"];
                $decription_add = $row["decription_add"];
                $amount_add = $row["amount_add"];

        }}

