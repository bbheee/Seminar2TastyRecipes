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
    </header>
        <div class = "login">
            <h2>Sign up</h2>
            <form class = "signup-form" action = "includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Firstname" >
                <input type="text" name="last" placeholder="Lastname" >
                <input type="text" name="email" placeholder="Email" >
                <input type="text" name="uid" placeholder="Username" >
                <input type="password" name="password" placeholder="Password" >
                <button type="submit" name="submit">Sign up </button>
            </form>

        </div>
</body>
</html>
