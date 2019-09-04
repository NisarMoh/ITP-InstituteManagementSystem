<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
    <?php session_start();?>
    <?php include '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>
</head>

<body>

    <?php include '../homepage_for_student/nav_and_header.inc.php'?>
    <?php require_once '../2. notice_and_forum [IT18018356]/getDBconn.php' ?>
    <?php include '../2. notice_and_forum [IT18018356]/getUsername.php'?>

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
                                            $sql = "SELECT topic_text, topic_description , topic_id , topic_op_id, category_name , category_id
                                                    FROM forum_topic t, forum_category c 
                                                    WHERE t.topic_category_id = c.category_id AND t.topic_id = " .$conn->real_escape_string($_GET['id']);

                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();

                                            $username1 = getUsername($row['topic_op_id']);

                                            include '../2. notice_and_forum [IT18018356]/topicMenu.php';

                                            echo '<h2>' .$row['topic_text']. '</h2>';
                                            echo '<h5>' .$username1. '</h2>';
                                            echo '<h5><a href="viewCategory.php?id=' .$row['category_id']. '">' .$row['category_name']. '</a></h5>';
                                            echo '<pre style="font-size:15px; font-family: Poppins;">' .$row['topic_description']. '</pre>';
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
                                            <h4>Comments <a href="#newComment" class="btn btn-success float-right" >New Comment + </a></h4>                                           
                                        </div>
                                    </div>

                                    <?php
                                    while ($row2 = $result2->fetch_assoc()) {
                                        $username2 = getUsername($row2['post_poster_id']);

                                        echo '<div class="card" id="'.$row2['post_id'].'">
                                                <div class="card-body">';

                                    include '../2. notice_and_forum [IT18018356]/commentMenu.php';

                                        echo       '<h5>' .$username2. '</h5> <p>'.$row2['post_time']. '  ' .$row2['post_date']. '</p>
                                                    <p>' .$row2['post_text']. '</p>
                                                    <div id="'.$row2['post_poster_id'].$row2['post_id'].'" class="collapse">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="../2. notice_and_forum [IT18018356]/editComment.php?id='.$_GET['id'].'" method="POST">
                                                                    <h4>Edit Comment</h4> <br>
                                                                    <textarea name="comment_txt"  rows="5" cols="50" required>' .$row2['post_text']. '</textarea><br>
                                                                    <input type="text" name="id" hidden value="' .$row2['post_id'].'">
                                                                    <input type="submit" value="Edit" class="btn btn-success">
                                                                    <a class="btn btn-warning" href="" data-toggle="collapse" data-target="#'.$row2['post_poster_id'].$row2['post_id'].'">Cancel</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
