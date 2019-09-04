<?php
// Initialize the session

session_start();
include_once '../3. staff_management [IT18068610]/user.php';
$user = new User();
$Staff_ID = $_SESSION['Staff_ID'];
if (!$user->get_session()) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>

<body>

    <?php include '../dashboard_for_staff/nav_and_header.inc.php'?>

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
                                                <h5 class="m-b-10">Timetable management</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Timetable Management</a></li>
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

                                        <!--[button to navigate to the insert timetable function] start-->
                                        <div class="card-body">
                                            <a href="timetable_admin_insert_main_page.php"><button type = "button" class = "btn-success btn-lg" width="" style="width:100%">Add New Timetables</button></a>
                                        </div>
                                        <!--[button to navigate to the insert timetable function] end-->
                                        <!--[button to navigate to the update timetable function] start-->
                                        <div class="card-body">
                                            <a href="timetable_admin_update_main_page.php"><button type = "button" class = "btn-warning btn-lg" style="width:100%">Update Timetables</button></a>
                                        </div>
                                        <!--[button to navigate to the update timetable function] end-->
                                        <!--[button to navigate to the delete timetable function] start-->
                                        <div class="card-body">
                                            <a href="timetable_admin_delete_page.php"><button type = "button" class = "btn-danger btn-lg" width="" style="width:100%">Delete Timetables</button></a>
                                        </div>
                                        <!--[button to navigate to the delete timetable function] end-->
                                        <!--[button to navigate to the view timetable function] start-->
                                        <div class="card-body">
                                            <a href="timetable_admin_view_page.php"><button type = "button" class = "btn-info btn-lg" width="" style="width:100%">View All Timetables</button></a>
                                        </div>
                                        <!--[button to navigate to the view timetable function] end-->

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

    <?php include'../dashboard_for_staff/req_js.inc.php' ?>
</body>

</html>



