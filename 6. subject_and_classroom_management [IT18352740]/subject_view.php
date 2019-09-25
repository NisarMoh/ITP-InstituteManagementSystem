<?php
include 'subject_action.php';
?>

<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="subject_view.css">
<body>

<?php include '../dashboard_for_staff/nav_and_header.inc.php' ?>
<?php $id = $_GET['id'] ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <!-- [ IMS: page title ] -->
                                            <h5 class="m-b-10">Subject management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php">
                                                   <a href="subject_staff_home.php" <i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Subject management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
                        or die(mysqli_error($mysqli));
                        $result = $mysqli->query("SELECT * FROM subject") or die($mysqli->error);
                        ?>

                        <?php
                        while ($row = $result->fetch_assoc()): ?>

                        <?php if($row['sub_id'] == $id){ ?>



                                <!-- card -->
                                <div >
                                    <div class="card text-white bg-info ">

                                        <br>
                                        <div class="card-body">
                                            <label>Subject : </label>
                                            <br>
                                                <h5 align="justify" class="card-title text-white"><?php echo $row['subject']; ?></h5>
                                            <br>
                                            <label>Subject ID :</label>
                                            <br>
                                                <h5  class="card-title text-white"><?php echo $row['sub_id']; ?></h5>
                                            <br>
                                            <label>Amount(.RS) :</label>
                                            <br>
                                                <h5 class="card-title text-white"><?php echo $row['amount']; ?></h5>
                                            <br>
                                            <label>References :</label>
                                            <br>
                                                <p class="card-text"><?php echo $row['reference']; ?></p>
                                            <br>
                                            <label>Description :</label>
                                            <br>
                                                <p class="card-text"><?php echo $row['decription']; ?></p>
                                        </div>
                                    </div>
                                </div>



                        <?php } ?>
                        <?php endwhile; ?>

                    <?php
                    function pre_r($array){
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                    ?>

                        <!-- [ Main Content ] end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->


<?php include '../dashboard_for_staff/req_js.inc.php' ?>
</body>

</html>

