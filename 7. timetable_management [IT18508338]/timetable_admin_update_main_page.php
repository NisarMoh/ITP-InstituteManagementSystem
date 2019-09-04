<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>

</head>

<body>

    <!--- error reporting -->
    <?php error_reporting(E_ERROR | E_PARSE); ?>
    <!-- get from URL whether the id field was empty,timetable with the particular id is existing-->
    <?php $updateMain = $_GET['updateMain']?>
    <!-- get from URL whether the timetable was updated successfully-->
    <?php $updateTimetable =$_GET['updateTimetable'] ?>
    <!-- get from URL the id that was entered-->
    <?php $id = $_GET['id']?>

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
                                                <li class="breadcrumb-item"><a href="#!">Update Timetable</a></li>
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
                                            <form method="post" action="../7.%20timetable_management%20%5BIT18508338%5D/controllers/UpdateTimetableController.php">
                                                <label for ="timetableUpdateMain">Please enter the venue you want to update</label>
                                                <input class = "mb-3 form-control form-control-sm" type="text" placeholder="Enter venue" id ="timetableUpdateMain" name="timetable_admin_update_timetableID">
                                                <button type="submit" class="btn btn-primary" name="timetable_admin_update_updateTimetable">Update Timetable</button>
                                            </form>
                                            <!--form end-->

                                            <!--[alert messages] start-->
                                            <!--[alert-if empty] start -->
                                            <?php if(strcmp($updateMain,"empty")==0){ ?>
                                                <br>
                                                <div class="alert alert-danger">Please fill in the Venue ID!</div>
                                                <!--[alert-if empty] end-->
                                                <!--[alert-not found] start-->
                                            <?php }else if(strcmp($updateMain,"notFound")==0){?>
                                                <br>
                                                <div class="alert alert-danger">Timetable <?php echo " $id " ?>is not found!</div>
                                            <?php } ?>
                                            <!--[alert-not found] end-->
                                            <!--[alert-update success] start -->
                                            <?php if(strcmp($updateTimetable,"success")==0){ ?>
                                                <br>
                                                <div class="alert alert-success">Timetable <?php echo " $id "?>has been updated successfully!</div>
                                            <?php }?>
                                            <!--[alert-update success] end-->
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


