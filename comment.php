<?php
    session_start();
    $page=$_SESSION['page'];
    include "includes/dbh.inc.php";
    $query = mysqli_query($conn, "select * from comment WHERE page='$page' ");

    while ($row = $query->fetch_array(MYSQLI_ASSOC))
        {
        $timestamp = $row['timestamp'];
        $comment = $row['comment'];
        $user = $row['user'];
            if(!isset($_SESSION['u_uid'])){
                echo '<p class="p2">' . $comment . '</p><br><p class="p3">' . $user . ' ' . $timestamp .'</P><br>';
            }
            elseif($_SESSION['u_uid'] == $user){
                echo '<p class="p2">' . $comment . '</p><br><p class="p3">' . $user . ' ' . $timestamp .'</p>
                        <form action="" method="POST">
                            <input name="time" type="hidden" value="' . $timestamp . '">
                            <button name="delete">Delete</button>
                        </form>
    <br>';
            }
            else{
                echo '<p class="p2">' . $comment . '</p><br><p class="p3">' . $user . ' ' . $timestamp .'</p><br>';
            }
        }
    if(isset($_POST['delete']))
    {
        $timestamp = $_POST['time'];
        mysqli_query($conn, "delete FROM comment WHERE timestamp= '$timestamp'");
        mysqli_close($conn);
        header("location: ".$_SESSION['page']);

    }
    mysqli_close($conn);
?>
