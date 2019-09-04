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

						
                        <div class="row">
                            <!-- [ fixed-layout ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                                                     
										
										
										<div class="col-md-6">										
											

											
											
											<!--<a href="../5.%20file_management%20%5BIT18122138%5D/Insert_for_staff.php">Insert</a>-->
											
											
										</div>					                                 
                                </div>
                            </div>
                            <!-- [ fixed-layout ] end -->
							
							
							
							
							
                        </div>
                        <!-- [ Main Content ] end -->
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<div class="img-thumbnail">
										<a href="../5.%20file_management%20%5BIT18122138%5D/Insert_for_staff.php">
											<img src="./gallery/insert.png" alt="Lights" style="width:100%">
											<div class="caption">																
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="img-thumbnail">
										<a href="../5.%20file_management%20%5BIT18122138%5D/Staff_View_for_staff.php">
											<img src="./gallery/view.png" alt="Nature" style="width:100%">
											<div class="caption">

											</div>
										</a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="img-thumbnail">
										<a>
											<img src="./gallery/edit.png" alt="Fjords" style="width:100%">
											<div class="caption">

											</div>
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
</body>

</html>
