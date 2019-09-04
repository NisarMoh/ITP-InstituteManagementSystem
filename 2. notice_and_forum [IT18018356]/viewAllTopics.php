<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../homepage_for_student/head.inc.php' ?>
    <?php include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>
</head>

<body>

    <?php include '../homepage_for_student/nav_and_header.inc.php'?>
    <?php include '../2. notice_and_forum [IT18018356]/getDBconn.php' ?>

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
                                            <div class="page-header-title d-inline">
                                                <!-- [ IMS: page title ] -->
                                                <h5 class="m-b-10">Notice and Forum Management</h5> 
                                            </div>
                                            <ul class="breadcrumb d-inline">
                                                <!-- [ IMS: breadcrumb ] -->
                                                <li class="breadcrumb-item d-inline"><a href="../homepage_for_student/homepage.php"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item d-inline"><a href="../2. notice_and_forum [IT18018356]/template_for_student_pages.php">Notice and forum management</a></li>
                                            </ul>
                                            <a href="../2. notice_and_forum [IT18018356]/newTopic.php" class="btn btn-success float-right d-inline">New Topic + </a>
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

                                            <h2>All Topics</h3>
                                            <br>

                                            <?php
                                                $sql = "SELECT topic_text , topic_id , category_name , category_id
                                                        FROM forum_topic t, forum_category c 
                                                        WHERE t.topic_category_id = c.category_id";

                                                $result = $conn->query($sql);
                                                $checkResult = $result->num_rows;

                                                if ($checkResult > 0) {

                                                    echo '<table class="table-striped" style="width: 100%;">';
                                                    echo '<th class="w-75"><h3>Topic</h3>';
                                                    echo '<th class="w-25"><h3>Category</h3>';

                                                    while ($row = $result->fetch_assoc()) {

                                                        echo '<tr>';
                                                        echo '<td>';
                                                        echo '<br><h4><a href="viewTopic.php?id=' . $row['topic_id'] . '">' . $row['topic_text'] . "</a></h4><br>";
                                                        echo '</td>';

                                                        echo '<td>';
                                                        echo '<h4><a href="viewCategory.php?id=' . $row['category_id'] . '">' . $row['category_name'] . '</a></h4>';
                                                        echo '</td>';
                                                        echo '</tr>';
                                                    }

                                                    echo '</table>';

                                                } else {

                                                    echo 'No posts at all...';

                                                }
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
