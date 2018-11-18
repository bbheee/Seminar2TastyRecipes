<?php
    session_start(); 
    include "includes/dbh.inc.php";

    if (isset($_POST['submit'])) 
        {
                $comment=$_POST['comment'];
                $user=$_SESSION['u_uid'];
                $page=$_SESSION['page'];                
                $query = mysqli_query($conn, "insert into comment(comment, user, page) values('$comment','$user','$page')");
                mysqli_close($conn);
                header("location: ".$_SESSION['page']);
        
        }
?>
<form action="" method="POST" autocomplete="off">
        <br>
    <input type="text" name="comment" Placeholder="write a comment here" Required/>
        <br>    
    <button name="submit" >Comment</button>
    <span><?php echo $error ?></span>
</form>
