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
                                            <li class="breadcrumb-item"><a href="#!">Create new Timetable</a></li>
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
                                    <div class="card-body">

                                        <!--form start-->
                                        <form method = "post" action=../7.%20timetable_management%20%5BIT18508338%5D/controllers/AddTimetableController.php>
                                            <label for ="timetableInsertMain">Please enter the venue that you want to create the timetable for</label>
                                            <input class = "mb-3 form-control form-control-sm" type="text" placeholder="Enter venue" id ="timetableInsertMain" name="timetable_admin_insert_timetableID">
                                            <button type="submit" class="btn btn-primary" name="timetable_admin_insert_next">Next</button>
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


<?php include'../dashboard_for_staff/req_js.inc.php' ?>
</body>

</html>



