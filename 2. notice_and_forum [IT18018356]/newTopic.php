<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
</head>

<body>

    <?php include '../homepage_for_student/nav_and_header.inc.php'?>
    <?php include '../mysql_db_connection.inc.php' ?>

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
                                            
                                        <?php
                                            $sql = "SELECT category_id, category_name
                                                    FROM forum_category";

                                            $result = $conn->query($sql);
                                        ?>
                                        <form action="../2. notice_and_forum [IT18018356]/addTopic.php" method="post">

                                            <h4>Topic</h4>
                                            <textarea name="topic_name" rows="1" cols="100"></textarea><br><br>

                                            <h4>Category</h4>
                                            <select name="topic_category">
                                                <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value = "' .$row['category_id']. '">' .$row['category_name']. '</option>' ;
                                                    }
                                                ?>
                                            </select><br><br>

                                            <h4>Description</h4>
                                            <textarea name="topic_description" rows="10" cols="198"></textarea><br><br><br>

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
