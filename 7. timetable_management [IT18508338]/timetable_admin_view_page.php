<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <?php include dirname(__FILE__).'/controllers/ViewAllTimetablesController.php'; ?>
</head>

<body>

    <!-- error reporting off-->
    <?php error_reporting(E_ERROR | E_PARSE); ?>
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
                                                <h5 class="m-b-10">Timetable Management</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="timetable_admin_mainmenu_page.php">Timetable Management</a></li>
                                                <li class="breadcrumb-item"><a href="#!">View All Timetables</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->

                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ fixed-layout ] start -->

                                <!--timetable ids stored in $timtableResList by calling ViewAllTimetables() method -->
                                <?php

                                    global $timetableView;
                                    $timetableResList = $timetableView->viewAllTimetables();

                                    //[for loop to display all the timetables] start
                                    for($k = 0;$k<count($timetableResList);$k++){

                                ?>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <!--ech out the timetable id -->
                                            <h5><?php print_r($timetableResList[$k]); ?></h5>

                                            <!-- [Timetable view]-->
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
                                                    //start and end times
                                                    $timeslot_start = 8;
                                                    $timeslot_end = 16;
                                                    for($timeslot_start;$timeslot_start <= $timeslot_end;$timeslot_start++){
                                                ?>

                                                    <tr>
                                                        <!-- [time] -->
                                                        <td>
                                                            <?php echo $timeslot_start ?>:00 - <?php echo $timeslot_start+1?>:00
                                                        </td>

                                                        <!-- for loop to iterate the column data for a row -->
                                                        <?php for($i = 1; $i <= 7;$i++) {

                                                            //new ITimetableCellServiceImplementation() to set the the id and retrieve data
                                                            $tcsv = new ITimetableCellServiceImplementation();
                                                            TimetableCell::setTimeId($timetableResList[$k]);

                                                            //viewAllTimetableCells() method called
                                                            $tcsv->viewAllTimetableCells(TimetableCell::getTimeId(),$i,$timeslot_start);

                                                        ?>

                                                            <td>
                                                                <?php echo TimetableCell::getTutorId() ?></br>
                                                                <?php echo TimetableCell::getSubjectId() ?>
                                                            </td>
                                                        <?php }?>
                                                        <!--for loop to iterate the column data for a row end -->

                                                    </tr>
                                                <?php } ?>
                                                <!--for loop to iterate rows end -->

                                            </table>
                                            <!-- [Timetable view] end -->

                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!--[for loop to display all the timetables] end -->
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
