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
                                                <h5 class="m-b-10">Quiz records</h5>
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
                            <?php
                            if (isset($_GET['operation'])){

                                $echo = '<div id="ModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">';

                                if($_GET['action'] === 'delete'){
                                    if ($_GET['operation'] === 'success'){
                                        $echo .= 'Record successfully removed';
                                    }else if($_GET['operation'] === 'fail'){
                                        $echo .= 'Error removing record';
                                    }
                                }

                                $echo .='</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>';

                                if (isset($_GET['error'])){
                                    $echo .='<div class="modal-body">
                                                        <p>'.$_GET['error'].'</p>
                                                    </div>';
                                }

                                $echo .='<div class="modal-footer">
                                                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';

                                echo $echo;
                            }
                            ?>

                            <!-- [ Main Content ] start -->
                            <div class="row justify-content-end">
                                <div class="col-md-12">
                                    <a href="view_add_assessment.php"><button type="button" class="btn btn-primary m-b-30"><i class="feather mr-2 icon-plus"></i>Add new record</button></a>
                                    <button type="button" class="btn btn-primary m-b-30 pop-search"><i class="feather mr-2 icon-search"></i>Search records</button>
                                </div>
                            </div>
                            <div class="row">
                                <!-- [ fixed-layout ] start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">


                                                    <?php
                                                        include_once 'AssessmentCRUD.php';
                                                        include_once 'getEntities.php';

                                                        $assessment = new AssessmentCRUD();
                                                        $exam = $assessment->selectAssessmentByType("quiz");

                                                        if($exam !== false ){
                                                            echo '<table class="table table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>ID</th>
                                                                        <th>Title</th>
                                                                        <th>Subject</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>';
                                                            $num = 1;
                                                            foreach ($exam as $key => $value) {
                                                                echo '<tr class="clickable-row" data-href="view_assessment_details.php?id='.$value->getAssessmentID().'">
                                                                        <td>'.$num.'</td>
                                                                        <td>'.$value->getAssessmentID().'</td>
                                                                        <td>'.$value->getAssessmentTitle().'</td>
                                                                        <td>'.getSubjectNameById($value->getSubject()).'</td>
                                                                   </tr>';

                                                                $num++;
                                                            }

                                                                        echo '</tbody>
                                                            </table>';
                                                        }else{
                                                            echo '<tr><td>No records found in the database</td></tr>';
                                                        }
                                                    ?>

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
