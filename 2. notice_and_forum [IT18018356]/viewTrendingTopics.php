<?php

$sql1 = "SELECT topic_text , topic_id , category_name , category_id
        FROM forum_topic t, forum_category c 
        WHERE t.topic_category_id = c.category_id AND t.topic_date > curdate() - 7
        ORDER BY t.topic_visit_counter DESC
        LIMIT 5";

$result1 = $conn->query($sql1);

echo '<table class="table-striped">';
echo '<th><h3>Topic</h3>';
echo '<th><h3>Category</h3>';

while ($row = $result1->fetch_assoc()) {

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

?>