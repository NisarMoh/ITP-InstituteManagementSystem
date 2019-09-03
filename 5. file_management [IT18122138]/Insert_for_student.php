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
                                                <h5 class="m-b-10">File management</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">File management</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] start -->


                            <div class="row">
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-sm-12">                                         
										<?php
											include('./classes/Uplode_student_class.php');
											$obj_file=new File();
											if(@$_POST['Submit'])

											{
												$obj_file ->student_id="STD01";
												$obj_file ->file_name=str_replace("'","''",$_POST['upfile_name']);
												$obj_file ->file_subject=str_replace("'","''",$_POST['upfile_subject']);
												$obj_file ->file=str_replace("'","''",@$_POST['upfile']);
												$obj_file ->insert_into_student();
											}

										?>
						
                       		 <div class="row">
                            <!-- [ fixed-layout ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">                                    
										
										
										<div class="col-md-6">
											
											
											<h4 class="mb-3 f-w-400 mb-4">Uplode your file</h4>
											<form method="post" enctype="multipart/form-data">
												<div class="form-group row">
													<label  class="col-sm-2 col-form-label">File name</label>
													<div class="col-sm-10">
														<input type="text" class="form-control"  name="upfile_name" placeholder="IOT_L2" required>
													</div>
												</div>
												<div class="form-group row">
													<label  class="col-sm-2 col-form-label">Subject code</label>
													<div class="col-sm-10">
														<input type="text" class="form-control"  name="upfile_subject" placeholder="IT2060" required >
													</div>
												</div>
												<div class="form-group row">
													<label  class="col-sm-2 col-form-label">Date and Time</label>
													<div class="col-sm-10">
														<input type="text" class="form-control"  name="upfile_date"  value="<?php date_default_timezone_set("Asia/Colombo");echo 			date("Y-m-d h:i:sa");?> " readonly   >
													</div>
												</div>
												<div class="form-group row ">
													<label  class="col-sm-2 col-form-label">File</label>
													<div class="col-sm-10">														
														<input type="file" class="btn btn-info"  name="upfile">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<div class="alert alert-primary" role="alert">check it out!																	</div>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="submit" class="btn btn-primary" name="Submit" value="Save">													
													</div>
												</div>
												
											</form>								
                                </div>
                            </div>
                            <!-- [ fixed-layout ] end -->
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















































