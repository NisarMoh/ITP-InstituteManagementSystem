<?php include '../dashboard_for_staff/session_for_staff.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <style>
        table{
            font-size: 16px;
        }
        td:first-child{
            width: 25%;
        }
    </style>
</head>

<body>

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
                                                <h5 class="m-b-10">Marks detail</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="view_examination_list.php">Examination records</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Marks detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->

                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ fixed-layout ] start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>

                                                    <tr>
                                                        <td>ID </td>
                                                        <td>MRK001</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Student Index</td>
                                                        <td>STD002</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Examination Title</td>
                                                        <td>Final exam of 2016 IT Students</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Subject</td>
                                                        <td>IT</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mark</td>
                                                        <td>89</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Grade</td>
                                                        <td>A</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">

                                            <div class="col-md-4">
<!--                                                <a href="view_add_assessment.php">-->
                                                    <button type="button" style="margin-left: 20px;" class="btn btn-primary m-b-30"><i class="feather mr-2 icon-edit"></i>Recheck</button>
<!--                                                </a>-->
                                                <a href="">
                                                    <button type="button" class="btn btn-danger m-b-30"><i class="feather mr-2 icon-x"></i>Delete record</button>
                                                </a>
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
