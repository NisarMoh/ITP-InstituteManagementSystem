<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="subject_update_subject.css">
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
                                            <h5 class="m-b-10">Subject Management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Update Subject</a></li>
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
                                        <div class="subject_add">
                                            <label>Subject</label>

                                            <input type="text" class="form-control" placeholder="" name="subject_update">

                                        </div>

                                        <div class="reference_add">

                                            <label for="exampleFormControlTextarea1">References</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="reference_update"></textarea>

                                        </div>

                                        <div class="decription_add">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="decription_update"></textarea>
                                        </div>

                                        <div class="amount_add">
                                            <label>Add Amount</label>
                                            <input type="text" class="form-control" placeholder="" name="amount_update">
                                        </div>
                                        <a href="subject_view_subject.php">
                                            <div class="btn_add">
                                                <button class="btn  btn-primary btn-lg" type="button">Update</button>
                                            </div>
                                        </a>

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

