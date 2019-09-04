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
                                 
                                            <?php

                                                $sql1 = "SELECT topic_text , topic_id 
                                                        FROM forum_topic t
                                                        WHERE t.topic_category_id = " .$conn->real_escape_string($_GET['id']);

                                                $result1 = $conn->query($sql1);

                                                $sql2 = "SELECT category_name, category_description 
                                                        FROM Forum_category c
                                                        WHERE c.category_id = " .$conn->real_escape_string($_GET['id']);

                                                $result2 = $conn->query($sql2);

                                                $row = $result2->fetch_assoc();

                                                echo'<h2>'.$row['category_name'].'</h3>
                                                     <p>'.$row['category_description'].'</p>';

                                                echo'<table class="table-striped">';
                                                // echo '<th><h3>'.$row['category_name'].'</h3>';
                                               
                                                while ($row = $result1->fetch_assoc()) {
                                                        
                                                    echo '<tr>';
                                                        echo '<td>';
                                                            echo '<h4><a href="viewTopic.php?id=' .$row['topic_id']. '">'.$row['topic_text']. "</a></h4>";
                                                        echo '</td>';
                                                    echo '</tr>';
                                                }

                                                echo '</table>';

                                            ?> 

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
