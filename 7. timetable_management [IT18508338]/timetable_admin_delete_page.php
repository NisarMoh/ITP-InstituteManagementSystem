<?php include '../dashboard_for_staff/session_for_staff.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>

<body>

    <!-- error reporting off-->
    <?php error_reporting(E_ERROR | E_PARSE); ?>
    <!-- get from URL whether the timetable was deleted successfully, whether a timetable with the id is existing-->
    <?php $deleteMain = $_GET['deleteMain']; ?>
    <!-- get from URL the id to be deleted-->
    <?php $id = $_GET['id']; ?>
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
                                                <li class="breadcrumb-item"><a href="timetable_admin_mainmenu_page.php">Timetable Management</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Delete Timetable</a></li>
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

                                            <!-- [form] start -->
                                            <form method="post" action="../7.%20timetable_management%20%5BIT18508338%5D/controllers/DeleteTimetableController.php">
                                                <label for ="timetableDeleteMain">Please enter the venue you want to delete</label>
                                                <input class = "mb-3 form-control form-control-sm" type="text" placeholder="Enter venue" id ="timetableDelete" name="timetable_admin_delete_timetableID">
                                                <button type="submit" class="btn btn-primary" name="timetable_admin_delete_delete" onclick="return confirm('Are you sure you want to delete timetable?')">Delete</button>
                                            </form>
                                            <!-- [form] end -->

                                            <!--[alert messages] start -->
                                            <!--[alert-if empty] start -->
                                            <?php if(strcmp($deleteMain,"empty")==0){ ?>
                                                <br>
                                                <div class="alert alert-danger">Please fill in a Venue ID</div>
                                                <!--alert-if empty end-->
                                                <!--[alert-success] start -->
                                            <?php }else if(strcmp($deleteMain,"success")==0){ ?>
                                                <br>
                                                <div class="alert alert-success">Timetable<?php echo " $id "?>has been deleted succesfully! </div>
                                                <!--alert-if success end-->
                                                <!--[alert-not found] start -->
                                            <?php }else if(strcmp($deleteMain,"notFound")==0){ ?>
                                                <br>
                                                <div class="alert alert-danger">Timetable <?php echo " $id " ?> is not found!</div>
                                            <?php } ?>
                                                <!--alert-not found end-->
                                            <!--[alert messages] end-->

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



