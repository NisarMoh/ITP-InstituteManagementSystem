<?php

    $sql2 = "SELECT category_name , category_id
            FROM forum_category c";

    $result2 = $conn->query($sql2);

    echo '<ul>';
    
    while ($row = $result2->fetch_assoc()) {
        echo '<li><h4><a href="viewCategory.php?id=' . $row['category_id'] . '">' . $row['category_name'] . '</a></h4></li>';
    }

    echo '</ul>';

?>