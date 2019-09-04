<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <?php include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php'?>
</head>

<body>

<?php include '../dashboard_for_staff/nav_and_header.inc.php'?>
<?php require_once '../2. notice_and_forum [IT18018356]/getDBconn.php' ?>

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
                                            <li class="breadcrumb-item"><a href="../2.%20notice_and_forum%20%5BIT18018356%5D/template_for_staff_pages.php">Notice and forum management</a></li>
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
                                    <div class="card-body">

                                        <?php
                                            $sql = "SELECT category_id, category_name
                                                    FROM forum_category";

                                            $result = $conn->query($sql);
                                        ?>

                                        <form action="../2. notice_and_forum [IT18018356]/addTopicStaff.php" method="post">

                                            <h4>Topic</h4>
                                            <textarea name="topic_name" class="form-control" rows="1" cols="100"></textarea><br><br>

                                            <h4>Category</h4>
                                            <select name="topic_category" class="form-control w-25">
                                                <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value = "' .$row['category_id']. '">' .$row['category_name']. '</option>' ;
                                                    }
                                                ?>
                                            </select><br><br>

                                            <h4>Description</h4>
                                            <textarea name="topic_description" class="form-control" rows="10" cols="198"></textarea><br><br><br>

                                            <input type="submit" name="submit" class="btn btn-success">

                                        </form>
                                        
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