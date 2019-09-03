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

                            		<?php									
										include('./classes/View_student_class.php');
										$vf=new ViewFile();

										if(@$_POST['Submit'])

										{
	
											$vf ->ViewFile_subject=str_replace("'","''",$_POST['upfile_subject']);
											$gt=$vf->getAllstAssignment();
											$row=mysqli_num_rows($gt);
											if($row)
	 											{
	 												//echo "File uploaded sucessfuly";
													//include('./Alert/success.html');
	 											}
	 										else
	 											{
	 												//echo "Try check your details";
													include('./Alert/warning.html');
	 											}

										}

								

										?>


                            <div class="row">
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-sm-12">                                        

						
                       		 <div class="row">
                            <!-- [ fixed-layout ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">                                    
										
										
										<div class="col-md-12">
											
											
											<h4 class="mb-3 f-w-400 mb-4">Assignments</h4>
													<form method="post" enctype="multipart/form-data">														
														<div class="form-group row">
															<label  class="col-sm-2 col-form-label">Subject code</label>
															<div class="col-sm-10">
																<input type="text" class="form-control"  name="upfile_subject" placeholder="IT2060" required >
															</div>
														</div>
														<div class="form-group row">
															<div class="col-sm-10">
																<input type="submit" class="btn btn-primary" name="Submit" value="Search">													
															</div>
														</div>

													</form>							
                                </div>
                            </div>
                            <!-- [ fixed-layout ] end -->
                        </div>                                           

                                  </div>

                                 <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">                                  
										<div class="col-md-12">										
											<h4 class="mb-3 f-w-400 mb-4">Assignments</h4>
												

														<table class="table">
															<thead class="thead-dark">
																<tr>																
																
																	<th scope="col">File name</th>
																	<th scope="col">Subject ID</th>																
																	<th scope="col">Date and time</th>
																	<th scope="col">Assignment</th>
																</tr>
															</thead>
														<tbody>

																<?php 
																$icount=1;
																while (@$data=mysqli_fetch_assoc(@$gt))
																{
																?>
															<tr>															

																<td><?php  echo $data['FileName']; ?></td>
																<td><?php  echo $data['SubjectID'];?></td>
																<td><?php  echo $data['Date_Time'];?></td>
																<td><a href="staff_uplodes/<?php  echo $data['materials_directory']; ?>" target="_blank">
																	<?php  echo $data['materials_directory']; ?></a></td>
																	
															</tr>
																	<?php 
																	$icount++;
																	}
																	?>
															
														</tbody>
													</table>




						
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















































