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
                                                <h5 class="m-b-10">Add new assessment record</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="view_examination_list.php">Examination records</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Add new assessment</a></li>
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

                                if ($_GET['operation'] === 'success'){
                                    $echo .= 'New record inserted successfully';
                                }else if($_GET['operation'] === 'fail'){
                                    $echo .= 'Error inserting record';
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
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="needs-validation" novalidate="" action="Assessment_controller.php?operation=insert" method="post">
                                                <div class="row tab-content" id="myTabContent">
                                                        <div class="col-sm-6 ">
                                                            <div class="form-group row">
                                                                <label for="validationCustom01" class="col-sm-6 col-form-label">Assessment title</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="validationCustom01" name="title" placeholder="Assessment Title" required="" value="<?php echo $assessment->getAssessmentTitle() ?>">
                                                                    <div class="valid-feedback">
                                                                        Looks good!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="validationCustom02" class="col-sm-6 col-form-label">Assessment Type</label>
                                                                <div class="col-sm-6">
                                                                    <select id="inputState" class="form-control" name="type">
                                                                        <option value="exam">Examination</option>
                                                                        <option value="test">Test</option>
                                                                        <option value="quiz">Quiz</option>
                                                                    </select>
                                                                    <div class="valid-feedback">
                                                                        Looks good!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="validationCustom02" class="col-sm-6 col-form-label">Subject</label>
                                                                <div class="col-sm-6">
                                                                    <select id="inputState" class="form-control" name="subject">
                                                                        <?php
                                                                        include_once 'getEntities.php';
                                                                        $subjects = getSubjectList();

                                                                        foreach ($subjects as $key => $value) {
                                                                            echo '<option value="'.$key.'">'.$value.'</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    <div class="valid-feedback">
                                                                        Looks good!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="validationCustom02" class="col-sm-6 col-form-label">Classroom</label>
                                                                <div class="col-sm-6">
                                                                    <select id="inputState" class="form-control" name="classroom">
                                                                        <?php
                                                                        $class = getClassroomList();

                                                                        foreach ($class as $key => $value) {
                                                                            echo '<option value="'.$key.'">'.$value.'</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    <div class="valid-feedback">
                                                                        Looks good!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="validationCustom01" class="col-sm-6 col-form-label">Date time</label>
                                                                <div class="col-sm-6">
                                                                    <input type="datetime-local" class="form-control" id="validationCustom01" name="dateTime" required="" value="<?php echo $assessment->getDateTime() ?>">
                                                                    <div class="valid-feedback">
                                                                        Looks good!
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                <div class="form-group row">
                                                                    <label for="validationCustom01" class="col-sm-6 col-form-label">Duration (Minutes)</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="validationCustom02" name="duration" required="">
                                                                        <div class="valid-feedback">
                                                                            Looks good!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>

                                                <button class="btn  btn-primary" type="submit">Submit form</button>
                                            </form>
                                            <script>
                                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                (function() {
                                                    'use strict';
                                                    window.addEventListener('load', function() {
                                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                        var forms = document.getElementsByClassName('needs-validation');
                                                        // Loop over them and prevent submission
                                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                                            form.addEventListener('submit', function(event) {
                                                                if (form.checkValidity() === false) {
                                                                    event.preventDefault();
                                                                    event.stopPropagation();
                                                                }
                                                                form.classList.add('was-validated');
                                                            }, false);
                                                        });
                                                    }, false);
                                                })();
                                            </script>
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

    <script type="text/javascript">
        $(window).on('load',function(){
            $('#ModalCenter').modal('show');
        });
    </script>
</body>

</html>
