<?php include '../dashboard_for_staff/session_for_staff.php' ?>

include'mysql_db_connection.inc.php';
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="class_add_class.css">
<body>

<?php include '../dashboard_for_staff/nav_and_header.inc.php' ?>

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
                                            <h5 class="m-b-10">Classroom Management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="class_staff_home.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Add Classroom</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="row">



                            <?php require_once 'class_add.php'; ?>


                            <div class="col-sm-12">
                                <div class="card">

                                    <?php require_once 'class_add.php'; ?>
                                    <?php  error_reporting(E_ERROR|E_PARSE); ?>
                                    <?php  $a  = $_GET['value']; ?>

                                    <form method="POST" action="class_add.php">

                                        <div class="class_add">
                                            <label>Classroom</label>

                                            <input type="text" class="form-control" placeholder="" name="class_add" required>

                                        </div>

                                        <div class="building_add">
                                            <label>Building</label>

                                            <input type="text" class="form-control" placeholder="" name="building_add" required   >

                                        </div>

                                        <div class="numberofseats_add">
                                            <label>Number Of Seats</label>

                                            <input type="text" required class="form-control" placeholder="" name="numberofseats_add" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  >

                                        </div>


                                        <div class="floorno_add">
                                            <label>Floor Number</label>

                                            <input type="text" class="form-control" placeholder="" name="floorno_add" required maxlength="2"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >

                                        </div>

                                        <label class="status_AC">Multimedia</label>
                                            <div class="multimedia">

                                                <div class="funkyradio-primary">
                                                    <input name="options_ML" value="YES" id="option1" type="radio" checked="">
                                                    <label for="radio1">YES</label>
                                                </div>

                                                <div class="funkyradio-primary">
                                                    <input name="options_ML" value="NO" id="option2" type="radio" checked="">
                                                    <label for="radio2">NO</label>
                                                </div>
                                            </div>

                                        <label class="status_M">Air Condition</label>
                                        <div class="AC_status">

                                            <div class="funkyradio-primary">
                                                <input name="options_AC" value="YES" id="option1" type="radio" checked="">
                                                <label for="radio1">YES</label>
                                            </div>

                                            <div class="funkyradio-primary">
                                                <input name="options_AC" value="NO" id="option2" type="radio" checked="">
                                                <label for="radio2">NO</label>
                                            </div>


                                        </div>




                                        <div class="btn_add">
                                            <button type = "submit" class = "btn btn-primary" name="btn_class_add">Submit</button>
                                        </div>

                                    </form>

                                    <!--   ---->
                                    <?php if(strcmp($a,"success")==0){ ?>
                                        <div class="alert alert-success" >
                                            Data successfully saved
                                        </div>
                                    <?php } ?>



                                </div>
                            </div>
                        </div>
                        <!-- [ fixed-layout ] end -->
                    </div>
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