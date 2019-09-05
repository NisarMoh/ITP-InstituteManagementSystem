<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <style>table{
            align-content: center;
        }</style>
</head>
<link rel="stylesheet" href="subject_view_subject.css">
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
                                            <li class="breadcrumb-item"><a href="class_staff_home.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">View Subject</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card ">
                                    <div class="col-sm-4">


                                        <?php
                                        $mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
                                        or die(mysqli_error($mysqli));
                                        $result = $mysqli->query("SELECT * FROM classroom") or die($mysqli->error);
                                        ?>


                                        <div class="row justify-content-center">


                                            <table class="table" style="width: 100%;">
                                                <thead class="table">
                                                <tr>
                                                    <th>Classroom</th>
                                                    <th>Building</th>
                                                    <th>Number Of Seats</th>
                                                    <th>Floor</th>
                                                    <th>Multimedia</th>
                                                    <th>AIR Condition</th>
                                                    <th colspan="2">Action</th>
                                                </tr>
                                                </thead>

                                                <?php
                                                while ($row = $result->fetch_assoc()): ?>

                                                    <tr>
                                                        <td height="100"><?php echo $row['classroom']; ?></td>
                                                        <td height="100"><?php echo $row['building']; ?></td>
                                                        <td height="100"><?php echo $row['number_of_seats']; ?></td>
                                                        <td height="100"><?php echo $row['floor']; ?></td>
                                                        <td height="100"><?php echo $row['multimedia']; ?></td>
                                                        <td height="100"><?php echo $row['air_condition']; ?></td>
                                                        <td height="100" width="15%">
                                                            <a href="class_update_class.php" ?edit=<?php echo  $row['hall_id']; ?>"
                                                        class=" btn btn-info"> Edit</a>
                                                            <a href="class_add.php?delete=<?php echo $row['hall_id']; ?>"
                                                               class="btn btn-danger">Delete</a>
                                                        </td>


                                                    </tr>

                                                <?php endwhile; ?>

                                            </table>



                                        </div>

                                    </div>
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
