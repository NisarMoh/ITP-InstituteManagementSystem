<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
    <?php include '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>
</head>

<body>

    <?php include '../homepage_for_student/nav_and_header.inc.php'?>
    <?php require_once '../2. notice_and_forum [IT18018356]/getDBconn.php' ?>

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
                                                <h5 class="m-b-10">Notice and Forum Management</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="../2. notice_and_forum [IT18018356]/template_for_student_pages.php">Notice and forum management</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ horizontal-layout ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <form action="../2. notice_and_forum [IT18018356]/addCategory.php" method="post">

                                                <h4>Category Name</h4> 
                                                <input type="text" class="form-control w-25" name="category_name" required > <span class="error"> <?php echo $_GET['error']; ?> </span> <br><br>

                                                <h4>Category Description</h4>
                                                <textarea name="category_description" class="form-control" rows="5" cols="100" required></textarea>
                                                <br><br>

                                                <input type="submit" name="submit" class="btn btn-success">

                                            </form>

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
