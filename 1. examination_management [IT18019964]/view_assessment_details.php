<?php include '../dashboard_for_staff/session_for_staff.php' ?>

<?php
    //Verification on global variable operation
    if (!isset($_GET['id'])){
        header("Location: ../index.php");
    }

    include_once 'AssessmentCRUD.php';
    include_once 'getEntities.php';
    $CRUD = new AssessmentCRUD();

    $assessment = $CRUD->selectAssessmentByID($_GET['id']);
?>
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
                                                <h5 class="m-b-10">Assessment record detail</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="view_examination_list.php">Examination records</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Assessment record detail</a></li>
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
                                                        <td><?php echo $assessment->getAssessmentID(); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Title</td>
                                                        <td><?php echo $assessment->getAssessmentTitle(); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Assessment type</td>
                                                        <td><?php echo $assessment->getEvaluationType(); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Subject</td>
                                                        <td><?php echo getSubjectNameById($assessment->getSubject()); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Classroom</td>
                                                        <td><?php echo getClassRoomById($assessment->getClassroom()); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Data time</td>
                                                        <td><?php echo $assessment->getDateTime(); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Duration</td>
                                                        <td><?php echo $assessment->getDuration(); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Record last modified on</td>
                                                        <td><?php echo $assessment->getSubmitted(); ?></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <a href="view_question_list.php">
                                                    <button type="button" style="margin-left: 20px;" class="btn  btn-success m-b-30">Question List</button>
                                                </a>

                                                <a href="view_mark_list.php">
                                                    <button type="button" class="btn  btn-warning m-b-30">Mark List</button>
                                                </a>
                                            </div>

                                            <div class="col-md-4">
<!--                                                <a href="view_add_assessment.php">-->
                                                    <button type="button" style="margin-left: 20px;" class="btn btn-primary m-b-30"><i class="feather mr-2 icon-edit"></i>Edit record</button>
<!--                                                </a>-->
<!--                                                <a href="Assessment_controller.php?operation=delete&id=--><?php //echo $assessment->getAssessmentID() ?><!--">-->
                                                    <button type="button" class="btn btn-danger m-b-30" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather mr-2 icon-x"></i>Delete record</button>
<!--                                                </a>-->
                                            </div>


                                        </div>
                                </div>
                                <!-- [ fixed-layout ] end -->
                            </div>
                            <!-- [ Main Content ] end -->

                                <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure want to delete ? </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Assessment record <?php echo $assessment->getAssessmentID() ?> will be permanently removed from the system. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="Assessment_controller.php?operation=delete&id=<?php echo $assessment->getAssessmentID() ?>">
                                                    <button type="button" class="btn  btn-primary">Delete</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


    <?php include'../dashboard_for_staff/req_js.inc.php' ?>
        <script type="text/javascript">
            $(window).on('load',function(){
                $('#ModalCenter').modal('show');
            });
        </script>
</body>

</html>
