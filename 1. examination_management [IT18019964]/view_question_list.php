<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <style>
        tr{
            cursor: pointer;
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
                                                <h5 class="m-b-10">Question list</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Examination management</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->

                            <!-- [ Main Content ] start -->
                            <div class="row justify-content-end">
                                <div class="col-md-12">
                                    <a href=""><button type="button" class="btn btn-primary m-b-30"><i class="feather mr-2 icon-plus"></i>Add new record</button></a>
                                    <button type="button" class="btn btn-primary m-b-30 pop-search"><i class="feather mr-2 icon-search"></i>Search records</button>
                                </div>
                            </div>
                            <div class="row">
                                <!-- [ fixed-layout ] start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ID</th>
                                                        <th>Question</th>
                                                        <th>Type</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr class="clickable-row" data-href="view_question_details.php">
                                                        <td>1</td>
                                                        <td>QUE001</td>
                                                        <td>What is computer networking?</td>
                                                        <td>MCQ</td>
                                                    </tr>

                                                    <tr class="clickable-row" data-href="">
                                                        <td>2</td>
                                                        <td>QUE002</td>
                                                        <td>What is ‘OCR’?</td>
                                                        <td>Open</td>
                                                    </tr>

                                                    <tr class="clickable-row" data-href="">
                                                        <td>3</td>
                                                        <td>QUE005</td>
                                                        <td>What is Computer Virus?</td>
                                                        <td>MCQ</td>
                                                    </tr>

                                            </div>
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
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#ModalCenter').modal('show');
        });
    </script>
</body>

</html>
