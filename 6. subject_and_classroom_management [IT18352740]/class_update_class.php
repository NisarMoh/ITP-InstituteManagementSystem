<?php include '../dashboard_for_staff/session_for_staff.php' ?>

include'mysql_db_connection.inc.php';
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="class_update_class.css">
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
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Update Classroom</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="row">



                            <!-- [ fixed-layout ] start -->


                            <div class="col-sm-12">
                                <div class="card">

                                    <form>
                                        <div class="class_update">
                                            <label>Class</label>

                                            <input type="text" class="form-control" placeholder="" name="class_updtae">

                                        </div>

                                        <div class="numberofseats_update">
                                            <label>Number Of Seats</label>

                                            <input type="text" class="form-control" placeholder="" name="numberofseats_update">

                                        </div>

                                        <div class="floorno_update">
                                            <label>Floor Number</label>

                                            <input type="text" class="form-control" placeholder="" name="floorno_update">

                                        </div>

                                        <label class="status_AC">Air Condition</label>
                                        <div class="AC_status">

                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input name="options" id="option1" type="radio" checked=""> YES</label>
                                                <label class="btn btn-secondary">
                                                    <input name="options" id="option2" type="radio"> NO</label>

                                            </div>
                                        </div>

                                        <label class="status_M">Multimedia</label>
                                        <div class="multimedia">

                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input name="options" id="option1" type="radio" checked=""> YES</label>
                                                <label class="btn btn-secondary">
                                                    <input name="options" id="option2" type="radio"> NO</label>

                                            </div>
                                        </div>




                                        <div class="btn_update">
                                            <button class="btn btn-primary event-btn m-2" type="button" name="btn_update">
                                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;"></span>
                                                <span class="load-text" style="display: none;">Loading...</span>
                                                <span class="btn-text">Update</span>
                                            </button>
                                        </div>

                                    </form>



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
