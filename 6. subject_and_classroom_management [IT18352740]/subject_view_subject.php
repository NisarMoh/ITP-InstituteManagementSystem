<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
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
                                            <li class="breadcrumb-item"><a href="subject_staff_home.php"><i class="feather icon-home"></i></a></li>
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



                                        <?php
                                        $mysqli = new mysqli('localhost', 'username', 'password', 'institute_management_system')
                                        or die(mysqli_error($mysqli));
                                        $result = $mysqli->query("SELECT * FROM subject") or die($mysqli->error);
                                        ?>

                                        <div class="row justify-content-center">


                                                <div class="float-none" style="width: 80%">
                                                <table class="table w-100" >
                                                    <thead>
                                                    <tr>
                                                        <th class="w-25">Subject</th>
                                                        <th class="w-25">References</th>
                                                        <th class="w-25">Description</th>
                                                        <th class="w-25">Amount</th>
                                                        <th class="w-25" colspan="2">Action</th>
                                                    </tr>
                                                    </thead>

                                                    <?php
                                                    while ($row = $result->fetch_assoc()): ?>

                                                        <tr>
                                                            <td height="100" style=" vertical-align: middle;" ><?php echo $row['subject']; ?></td>
                                                            <td height="100" style=" vertical-align: middle;" ><?php echo $row['reference']; ?></td>
                                                            <td height="100" style=" vertical-align: middle;" ><?php echo $row['decription']; ?></td>
                                                            <td height="100" style=" vertical-align: middle;" ><?php echo $row['amount']; ?></td>
                                                            <td height="100" style=" vertical-align: middle;" >
                                                                <a href="subject_update_subject.php" ?edit=<?php echo  $row['sub_id']; ?>"
                                                        class=" btn btn-info"> Edit</a>
                                                                <a href="subject_add.php?delete=<?php echo $row['sub_id']; ?>"
                                                                   class="btn btn-danger">Delete</a>
                                                            </td>


                                                        </tr>

                                                    <?php endwhile; ?>

                                                </table>
                                                </div>



                                        </div>

                                        <?php
                                        function pre_r($array){
                                        echo '<pre>';
                                        print_r($array);
                                        echo '</pre>';
                                        }
                                        ?>



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