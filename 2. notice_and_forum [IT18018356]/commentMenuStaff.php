<?php include_once '../2. notice_and_forum [IT18018356]/loggedInCheck.php' ?>

<div class="btn-group dropleft float-right">
  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="feather icon-grid"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <?php
    if ($_SESSION['Staff_ID'] == $row2['post_poster_id']) {

      echo '<a class="dropdown-item" href="" data-toggle="collapse" data-target="#' . $row2['post_poster_id'] . $row2['post_id'] . '">Edit</a>';
      echo '<a class="dropdown-item" href="deleteCommentStaff.php?post_id=' . $row2['post_id'] . '&topic_id=' . $_GET['id'] . '">Delete</a>';
    } else {
      echo '<a class="dropdown-item" href="#">Report !</a>';
    }
    ?>
  </div>
</div>