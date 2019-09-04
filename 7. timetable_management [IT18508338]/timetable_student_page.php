<?php include '../homepage_for_student/session_for_student.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
    <?php include dirname(__FILE__).'/controllers/ViewRelevantStudentTimetableController.php' ?>
</head>

<body>

    <?php include '../homepage_for_student/nav_and_header.inc.php'?>

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <!-- [ IMS: page title ] -->
                                                <h5 class="m-b-10">My Timetables</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">My Timetables</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <?php

                                    global $timetableView;
                                    global $res;
                                    global $resCount;

                                    //[for loop to display all the timetables that the student has subjects that he is enrolled in] start
                                    for($r=0;$r<$resCount;$r++){
                                ?>
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- echo out the timetable id -->
                                            <h5><?php print_r($res[$r]) ?></h5>

                                            <!-- [Timetable view]-->
                                            <table class="table table-hover"">
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
                                                        for($timeslot_start;$timeslot_start <= $timeslot_end;$timeslot_start++){ ?>

                                                            <tr>
                                                                <!-- [time] -->
                                                                <td>
                                                                    <?php echo $timeslot_start ?>:00 - <?php echo $timeslot_start+1?>:00
                                                                </td>

                                                                <!-- for loop to iterate the column data for a row -->
                                                                <?php for($i = 1; $i <= 7;$i++) {
                                                                    $tcsv = new ITimetableCellServiceImplementation();
                                                                    TimetableCell::setTimeId($res[$r]);

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
                                <!--[for loop to display all the timetables that the student has subjects that he is enrolled in] end
                                [ horizontal-layout ] end -->
                            </div>
                            <!-- [ Main Content ] end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include'../homepage_for_student/req_js.inc.php' ?>
</body>

</html>
