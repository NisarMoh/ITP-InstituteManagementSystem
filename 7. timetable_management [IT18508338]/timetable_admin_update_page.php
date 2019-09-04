<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <?php include dirname(__FILE__).'/controllers/UpdateTimetableController.php'; ?>
</head>

<body>

    <!-- get from URL the id that was entered-->
    <?php $timetableId = $_GET['updateTimetable']; ?>
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

                                            <!--[Timetable update form] start-->
                                            <form method="post" action="../7.%20timetable_management%20%5BIT18508338%5D/controllers/UpdateTimetableController.php?updateTimetable=<?php echo $timetableId?>">
                                                <!--echo the timetable id-->
                                                <h5><?php echo $timetableId ?></h5>

                                                <table class="table table-hover">
                                                    <!-- [column names] -->
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Monday</th>
                                                        <th>Tuesday</th>
                                                        <th>Wednesday</th>
                                                        <th>Thursday</th>
                                                        <th>Friday</th>
                                                        <th>Saturday</th>
                                                        <th>Sunday</th>
                                                    </tr>

                                                    <!-- [rows] -->
                                                    <!--for loop to iterate rows-->
                                                    <?php
                                                    $timeslot_start = 8;
                                                    $timeslot_end = 16;
                                                    for($timeslot_start;$timeslot_start <= $timeslot_end;$timeslot_start++){?>

                                                        <tr>
                                                            <!-- [time] -->
                                                            <td>
                                                                <?php echo $timeslot_start ?>:00 - <?php echo $timeslot_start+1?>:00
                                                            </td>

                                                            <!-- for loop to iterate the column data for a row -->
                                                            <?php for($i = 1; $i <= 7;$i++) {

                                                                $tcsu = new ITimetableCellServiceImplementation();
                                                                TimetableCell::setTimeId($timetableId);
                                                                $tcsu->viewAllTimetableCells(TimetableCell::getTimeId(),$i,$timeslot_start);
                                                                ?>

                                                                <td>
                                                                    <input class = "mb-3 form-control form-control-sm" type="text" value="<?php echo TimetableCell::getTutorId(); ?>" placeholder="Enter Tutor" name="<?php echo $timeslot_start."tutor".$i?>"/>
                                                                    <input class = "mb-3 form-control form-control-sm" type="text" value="<?php echo TimetableCell::getSubjectId(); ?>" placeholder="Enter Subject" name="<?php echo $timeslot_start."subject".$i?>"/>
                                                                </td>

                                                            <?php }?>
                                                            <!--for loop to iterate the column data for a row end -->

                                                        </tr>
                                                    <?php } ?>
                                                    <!--for loop to iterate rows end -->

                                                </table>

                                                <button type = "submit" class = "btn btn-primary" name="timetable_admin_update_saveChanges">Save changes</button>
                                            </form>
                                            <!-- [Timetable update form] end-->

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

