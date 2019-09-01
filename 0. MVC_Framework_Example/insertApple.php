<?php include '../dashboard_for_staff/session_for_staff.php' ?>
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

                            <!-- Success and Failure Msg -->
                            <?php
                                if (isset($_GET['operation'])){

                                    $echo = '<div id="ModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Record insertion '.$_GET['operation'].'</h5>
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
                                            <h5>Insert new apple record</h5>
                                            <hr>
                                            <form class="needs-validation" novalidate="" action="AppleController.php?operation=insert" method="post">
                                                <div class="form-group row">
                                                    <label for="validationCustom01" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name of the apple" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom02" class="col-sm-2 col-form-label">Age</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="validationCustom02" name="age" placeholder="Age of the apple" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
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
