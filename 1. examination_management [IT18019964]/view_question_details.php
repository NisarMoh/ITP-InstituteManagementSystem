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
                                                <h5 class="m-b-10">Question detail</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="view_examination_list.php">Examination records</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Question detail</a></li>
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
                                                        <td>QUE001</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Question</td>
                                                        <td>What is computer networking?</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Choices</td>
                                                        <td>4</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Answer 1</td>
                                                        <td>ABCD</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Answer 2</td>
                                                        <td> A system in which computers  are connected to share information and resources</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Answer 3</td>
                                                        <td>XYZ</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Answer 4</td>
                                                        <td>MNOP</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Correct Answer</td>
                                                        <td>Answer 2</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">

                                            <div class="col-md-4">
<!--                                                <a href="view_add_assessment.php">-->
                                                    <button type="button" style="margin-left: 20px;" class="btn btn-primary m-b-30"><i class="feather mr-2 icon-edit"></i>Edit record</button>
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
