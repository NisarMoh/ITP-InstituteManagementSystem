<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
</head>

<body>

<?php include '../dashboard_for_staff/nav_and_header.inc.php'?>
<?php include '../mysql_db_connection.inc.php' ?>

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
                                            <h5 class="m-b-10">Notice and forum management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Notice and forum management</a></li>
                                        </ul>
                                        <a href="../2. notice_and_forum [IT18018356]/newTopic.php" class="btn btn-success">New Topic + </a>
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
                                    <div class="card-body">
                                            
                                        <h2>Recently Added</h3>
                                        <br>

                                        <?php include '../2. notice_and_forum [IT18018356]/viewRecentTopics.php' ?>
                                            
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h2>Trending</h3>
                                        <br>
                                            
                                        <?php include '../2. notice_and_forum [IT18018356]/viewTrendingTopics.php' ?>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h2>Most Viewed</h3>
                                        <br>

                                        <?php include '../2. notice_and_forum [IT18018356]/viewMostViewedTopics.php' ?>
                                            
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h2>Categories</h2>
                                        <a href="../2. notice_and_forum [IT18018356]/newCategory.php" class="btn btn-success">New Category + </a>
                                        <br><br>

                                        <?php include '../2. notice_and_forum [IT18018356]/viewAllCategories.php' ?>

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
