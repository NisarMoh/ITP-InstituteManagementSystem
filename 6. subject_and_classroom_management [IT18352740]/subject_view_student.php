<?php include '../homepage_for_student/session_for_student.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>


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
                                            <h5 class="m-b-10">Subject and class management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Subject and class management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] start -->



                       

                        <div class="row">
                            <!-- [ horizontal-layout ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- [ horizontal-layout ] start -->
                                            <div class="col-sm-12">

                                                <?php
                                                $mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
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

                                                            </tr>
                                                            </thead>

                                                            <?php
                                                            while ($row = $result->fetch_assoc()): ?>

                                                                <tr>
                                                                    <td height="100" style=" vertical-align: middle;" ><?php echo $row['subject']; ?></td>
                                                                    <td height="100" style=" vertical-align: middle;" ><?php echo $row['reference']; ?></td>
                                                                    <td height="100" style=" vertical-align: middle;" ><?php echo $row['decription']; ?></td>
                                                                    <td height="100" style=" vertical-align: middle;" ><?php echo $row['amount']; ?></td>

                                                                    </td>


                                                                </tr>

                                                            <?php endwhile; ?>

                                                        </table>
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
                                            <!-- [ horizontal-layout ] end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ horizontal-layout ] end -->
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
