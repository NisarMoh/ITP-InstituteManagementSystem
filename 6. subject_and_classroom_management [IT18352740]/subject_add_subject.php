<?php include '../dashboard_for_staff/session_for_staff.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>
<link rel="stylesheet" href="subject_add_subject.css">
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
                                            <h5 class="m-b-10">Subject Management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="subject_staff_home.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Add Subject</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <!-- [ fixed-layout ] start -->



                            <div class="col-sm-12">
                                <div class="card">

                                    <?php require_once 'subject_add.php'; ?>
                                    <?php  error_reporting(E_ERROR|E_PARSE); ?>
                                    <?php  $a  = $_GET['value']; ?>

                                    <form method="POST" action="subject_add.php">
                                        <div class="subject_add">
                                            <label>Subject</label>

                                            <input type="text" class="form-control" value="<?php echo $subject_add; ?>" placeholder="" name="subject_add" required>

                                        </div>

                                        <div class="reference_add">

                                            <label for="exampleFormControlTextarea1">References</label>
                                            <textarea class="form-control" value="<?php echo $reference_add; ?>" id="exampleFormControlTextarea1" rows="2" maxlength="200" name="reference_add" required></textarea>

                                        </div>

                                        <div class="decription_add">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" value ="<?php echo $decription_add; ?> " id="exampleFormControlTextarea1" rows="3" name="decription_add" maxlength="500" required></textarea>
                                        </div>

                                        <div class="amount_add">
                                            <label>Add Amount</label>
                                            <input type="text" class="form-control" value ="<?php echo $amount_add; ?> " placeholder="" name="amount_add" maxlength="6" required  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >
                                        </div>



                                            <div class="btn_add">
                                                <button type = "submit" class = "btn btn-primary" name="btn_subject_add">Submit</button>
                                            </div>



                                    </form>
                                    <?php if(strcmp($a,"success")==0){ ?>
                                    <div class="alert alert-success" >
                                       Data successfully saved
                                    </div>
                                    <?php } ?>
                                    <!--   ---->



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


<?php include '../dashboard_for_staff/req_js.inc.php' ?>
</body>

</html>