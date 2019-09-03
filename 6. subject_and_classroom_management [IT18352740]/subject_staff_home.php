<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="subject_staff_home.css">
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
                                            <h5 class="m-b-10">Subject management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Subject management</a></li>
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


                                    <a href="subject_add_subject.php">
                                        <div class="btn_add_subject">
                                            <button class="btn btn-primary event-btn m-2" type="button">
                                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;"></span>
                                                <span class="load-text" style="display: none;">Loading...</span>
                                                <span class="btn-text">Add Subject</span>
                                            </button>
                                        </div>
                                    </a>

                                    <a href="subject_view_subject.php">
                                        <div class="btn_view">
                                            <button class="btn  btn-success" type="button">View Subject Data</button>
                                        </div>

                                    </a>


                                    <form action="" method="post">

                                    </form>




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

