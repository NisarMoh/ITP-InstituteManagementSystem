<div class="card" id="newComment">
    <div class="card-body">
        <form action="../2. notice_and_forum [IT18018356]/addCommentStaff.php" method="POST">
            <h4>New Comment</h4> <br>
            <textarea name="comment_txt" class="form-control" rows="5" cols="50" placeholder="Type your comments here..." required></textarea><br>
            <input type="text" name="id" hidden value="<?php echo $_GET['id']; ?>">
            <input type="submit" name="post" class="btn btn-success float-right px-5">
        </form>
    </div>
</div>