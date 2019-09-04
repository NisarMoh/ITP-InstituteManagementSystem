<?php

include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php';

$sql1 = "SELECT topic_text , topic_id , category_name , category_id
        FROM forum_topic t, forum_category c 
        WHERE t.topic_category_id = c.category_id AND t.topic_date > curdate() - 7
        ORDER BY t.topic_visit_counter DESC
        LIMIT 5";

$result1 = $conn->query($sql1);
$checkResult1 = $result1->num_rows;

if ($checkResult1 > 0) {

    echo '<table class="table-striped" style="width: 100%;">';
    echo '<th class="w-75"><h3>Topic</h3>';
    echo '<th class="w-25"><h3>Category</h3>';

    while ($row = $result1->fetch_assoc()) {

        echo '<tr>';
        echo '<td>';
        echo '<br><h4><a href="viewTopicStaff.php?id=' . $row['topic_id'] . '">' . $row['topic_text'] . "</a></h4><br>";
        echo '</td>';

        echo '<td>';
        echo '<h4><a href="viewCategoryStaff.php?id=' . $row['category_id'] . '">' . $row['category_name'] . '</a></h4>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';

} else {

    echo 'Nothing Trending Today...';

}


?>