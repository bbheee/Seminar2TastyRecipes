<?php

session_start();

if (isset($_POST['submit'])){
    include 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($uid)||empty($password)){
        header("Location:../signup.php?signup=empty");
        exit();
    }
    else{
    $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email='$email'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1){
        header("Location:../signup.php?signup=error");
        exit();
    }else{
        if($row = mysqli_fetch_assoc($result)){
        //de-hashing the password
        $hashedPwdCheck = password_verify($password, $row['user_password']);
        if ($hashedPwdCheck==false){
            header("Location:../signup.php?signup=error");
            exit();
        }elseif ($hashedPwdCheck==true){
            //log in the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['user_first'];
            $_SESSION['u_last'] = $row['user_last'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_uid'] = $row['user_uid'];

        }
        }
    }
    }
    header("Location:../login.php");
    exit();

}
