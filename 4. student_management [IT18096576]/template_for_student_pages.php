

<?php include '../homepage_for_student/session_for_student.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>

    p {color: red;}
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
                                                <h5 class="m-b-10">Student Profile</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Student Management</a></li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                    
                                    

                                    <?php
                                                       include 'fetch.php';
                                                      // include 'action_modal.php'
											?>
                                        <div class="card-body">
                                                  
                                            <p style="text-align:center;" > 
                                            <h4>Username:<input type="text" disabled placeholder="<?php echo $row['username']; ?> "><br></h4>
                                            <h4>FullName: <input type="text" disabled placeholder="<?php echo $row['firstname'].' '.$row['lastname']; ?>"> <br></h4> 
                                            <h4>Email:<input type="text" disabled placeholder="<?php echo $row['email']; ?>"><br></h4> 
                                            <h4>Contactno: <input type="text" disabled placeholder="<?php echo $row['contactno']; ?>"><br></h4> 
                                            <h4>Age: <input type="text"disabled placeholder="<?php echo $row['age']; ?>"><br></h4> 
                                            <h4>Address: <input type="text"disabled placeholder="<?php echo $row['address']; ?>"><br></h4> 
                                             
                                            </p>
                                            
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
