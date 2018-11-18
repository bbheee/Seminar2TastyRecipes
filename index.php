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
        <div class = "text">
        <h1> <b>Welcome to tasty recipes!</b> </h1>
        <h1> <b>Yum Yum!</b> </h1>
            <div class = "button">
                <a href="calendar.php" class = "btn"> Explore our Calendar Now</a>
            
            </div>
        </div> 
    </header>
</body>    
</html>