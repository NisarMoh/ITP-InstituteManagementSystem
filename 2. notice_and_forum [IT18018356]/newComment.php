<div class="card" id="newComment">
    <div class="card-body">
        <form action="../2. notice_and_forum [IT18018356]/addComment.php" method="POST">
            <h4>New Comment</h4> <br>
            <textarea name="comment_txt" rows="5" cols="50" placeholder="Comment..." required></textarea><br>
            <input type="text" name="id" hidden value="<?php echo $_GET['id']; ?>">
            <input type="submit" name="post" class="btn btn-success">
        </form>
    </div>
</div>