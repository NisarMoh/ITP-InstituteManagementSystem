<?php include '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>

<div class="btn-group dropleft float-right">
  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="feather icon-grid"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <?php
        if ($_SESSION['id'] == $row['topic_op_id']) {

            echo '<a class="dropdown-item" href="editTopicStaff.php?topic_id='.$row['topic_id'].'">Edit</a>';
            echo '<a class="dropdown-item" href="deleteTopic.php?topic_id='.$row['topic_id'].'">Delete</a>';

        } else {
            echo '<a class="dropdown-item" href="#">Report !</a>';
        }
    ?>
  </div>
</div>