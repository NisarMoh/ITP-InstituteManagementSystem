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
                                                <h5 class="m-b-10">Notice and forum management</h5>
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
                                                 
                                            <?php include '../2. notice_and_forum [IT18018356]/updateViewCounter.php' ?>

                                            <?php
                                            $sql = "SELECT topic_text, topic_description , category_name , category_id
                                                    FROM forum_topic t, forum_category c 
                                                    WHERE t.topic_category_id = c.category_id AND t.topic_id = " .$conn->real_escape_string($_GET['id']);

                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();

                                            echo '<h2>' .$row['topic_text']. '</h2>';
                                            echo '<h5><a href="viewCategory.php?id=' .$row['category_id']. '">' .$row['category_name']. '</a></h5>';
                                            echo '<p>' .$row['topic_description']. '</p>';
                                            ?>

                                        </div>
                                    </div>

                                    <?php

                                    $sql2 ='SELECT post_text , post_poster_id , post_id , post_date , post_time
                                            FROM forum_post p
                                            WHERE p.post_topic_id = ' .$conn->real_escape_string($_GET['id']);

                                    $result2 = $conn->query($sql2);
                                    ?>

                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Comments <a href="#newComment" class="btn btn-success" >New Comment + </a></h4>                                           
                                        </div>
                                    </div>

                                    <?php
                                    while ($row2 = $result2->fetch_assoc()) {
                                        echo '<div class="card" id="'.$row2['post_id'].'">
                                                <div class="card-body">
                                                    <h5>' .$row2['post_poster_id']. '</h5> <p>'.$row2['post_time']. '  ' .$row2['post_date']. '</p>
                                                    <p>' .$row2['post_text']. '</p>
                                                </div>
                                            </div>';
                                    }
                                    
                                    include '../2. notice_and_forum [IT18018356]/newComment.php';
                                    
                                    ?>
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
