<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Tasty Recipes</title>
<link href="main.css" rel="stylesheet" type="text/css">
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class = "row">
        <ul class = "main-nav">
            <li class ="active"><a href ="index.php">Home</a></li>
            <li><a href ="meatballs.php">Meatballs</a></li>
            <li><a href ="pancakes.php">Pancakes</a></li>
            <li><a href ="calendar.php">Calendar</a></li>
            <li><a href ="login.php">Login</a></li>

        </ul>
        </div>

        <div class = "login">
           <?php
                if(isset ($_SESSION['u_id'])){
                    echo'<form action="includes/logout.inc.php" method="POST">
                <button type ="submit" name="submit">Logout</button>
            </form>';
                }else{
                    echo '<form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="username/email" >
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="submit">Login</button>
            </form>
            <a href="signup.php">Sign up here!</a>';
                }
            ?>

        </div>
    </header>
</body>
</html>
