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
                                                <h5 class="m-b-10">Recent assessments result</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Examination management</a></li>
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
                                        <div class="card-header">
                                            <h5>Examinations</h5>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Subject</th>
                                                        <th>Mark</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Final exam of 2016</td>
                                                        <td>Maths</td>
                                                        <td>89</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Final exam of 2016</td>
                                                        <td>Science</td>
                                                        <td>47</td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Mid exam of 2016</td>
                                                        <td>Maths</td>
                                                        <td>68</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Tests</h5>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Subject</th>
                                                        <th>Mark</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Test on algebra</td>
                                                        <td>Maths</td>
                                                        <td>18</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Test on lesson 2</td>
                                                        <td>Science</td>
                                                        <td>59</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Quiz</h5>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Subject</th>
                                                        <th>Mark</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Quiz on number system</td>
                                                        <td>IT</td>
                                                        <td>98</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

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