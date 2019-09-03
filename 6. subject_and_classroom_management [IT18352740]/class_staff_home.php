
<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="class_staff_home.css">
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
                                            <h5 class="m-b-10">Classroom management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Classroom Management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card">
                                    <!-- [ fixed-layout ] start -->


                                    <a href="class_add_class.php">
                                        <div class="btn_add_class">
                                            <button class="btn btn-primary event-btn m-2" style="width: 8%" " type="button">
                                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;"></span>
                                                <span class="load-text" style="display: none;">Loading...</span>
                                                <span class="btn-text">Add Class</span>
                                            </button>
                                        </div>
                                    </a>


                                    <a href="class_view_class.php">
                                        <div class="btn_view" style="width: 30%">
                                            <button class="btn  btn-success" type="button">View Class Data</button>
                                        </div>

                                    </a>




                                    <div>

                                    </div>
                                    <!-- [ fixed-layout ] end -->
                                </div>
                            </div>
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
