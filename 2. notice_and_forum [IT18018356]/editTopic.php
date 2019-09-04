<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
    <?php include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>
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
                                    <div calss="card">
                                        <div class="card-body">
                                            <h2>Edit Topic</h2>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            
                                        <?php
                                            $sql = "SELECT category_id, category_name
                                                    FROM forum_category";

                                            $result = $conn->query($sql);

                                            $sql2 = "SELECT topic_description,topic_text 
                                                     FROM institute_management_system.forum_topic
                                                     WHERE topic_id = ".$_GET['topic_id'];

                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                        ?>
                                        <form action="../2. notice_and_forum [IT18018356]/updateTopic.php?topic_id=<?php echo $_GET['topic_id'] ?>" method="post">

                                            <h4>Topic</h4>
                                            <textarea name="topic_name" class="form-control" rows="1" cols="100"><?php echo $row2['topic_text'] ?></textarea><br><br>

                                            <h4>Category</h4>
                                            <select name="topic_category" class="form-control w-25" value="<?php echo $row2['topic_category_id'] ?>">>
                                                <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value = "' .$row['category_id']. '">' .$row['category_name']. '</option>' ;
                                                    }
                                                ?>
                                            </select><br><br>

                                            <h4>Description</h4>
                                            <textarea name="topic_description" class="form-control" rows="10" cols="198"><?php echo $row2['topic_description'] ?></textarea><br><br><br>

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
