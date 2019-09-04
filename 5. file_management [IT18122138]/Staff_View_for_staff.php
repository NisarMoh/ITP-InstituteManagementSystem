<?php
// Initialize the session

session_start();
include_once '../3. staff_management [IT18068610]/user.php';
$user = new User();
$Staff_ID = $_SESSION['Staff_ID'];
if (!$user->get_session()) {
	header("location:login.php");
}
?>

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

								<!-- [ breadcrumb ] start -->
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
													<li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
													<li class="breadcrumb-item"><a href="#!">File management</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- [ breadcrumb ] end -->

								<!-- [ Main Content ] start -->

								<?php

									
									include('./classes/View_staff_class.php');
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
									<!-- [ fixed-layout ] start -->
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">                                    


												


													<h4 class="mb-3 f-w-400 mb-4">Students' Assignments</h4>
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
									</div>
									
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">                                    


												



													<table class="table">
														<thead class="thead-dark">
															<tr>																
																<th scope="col">Student ID</th>
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
																
																<td><?php  echo $data['StudentID']; ?></td>
																<td><?php  echo $data['FileName']; ?></td>
																<td><?php  echo $data['SubjectID'];?></td>
																<td><?php  echo $data['Date_Time'];?></td>
																<td><a href="student_uplodes/<?php  echo $data['assignment_directory']; ?>" target="_blank">
																	<?php  echo $data['assignment_directory']; ?></a></td>
																
																


															</tr>
																	<?php 
																	$icount++;
																	}
																	?>
															
														</tbody>
													</table>




																
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
