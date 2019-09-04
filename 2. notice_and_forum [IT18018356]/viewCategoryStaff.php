<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>
    <?php include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>
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
                                            <li class="breadcrumb-item"><a href="#!">Notice and forum management</a></li>
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
                                                        echo '<h4><a href="viewTopicStaff.php?id=' .$row['topic_id']. '">'.$row['topic_text']. "</a></h4>";
                                                    echo '</td>';
                                                echo '</tr>';
                                            }

                                            echo '</table>';

                                        ?>
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
