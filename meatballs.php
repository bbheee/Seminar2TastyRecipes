<?php
    session_start();
    $_SESSION['page']="meatballs.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Meatballs</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="recipe.css" rel="stylesheet" type="text/css">
    <link href="reset.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class = "row">
        <ul class = "main-nav">
            <li class ="active"><a href ="index.php">Home</a></li>
            <li><a href ="meatballs.php">Meatballs</a></li>
            <li><a href ="pancakes.php">Pancakes</a></li>
            <li><a href ="calendar.php">Calender</a></li>
            <li><a href ="login.php">Login</a></li>
        </ul>
        </div>
    </header>
    <main>
    <img src ="kottbullar.jpg" alt="meatballs" style="width: 250px;height: 150px;">
    <h3><b> Ingredients:</b> </h3>
    <ul class= "ingredients">
        <li> 1/2 dl breadcrumbs </li>   <li> 1 dl cream </li>
        <li> 1/2 kg minced beef </li>
        <li> 2 msk chopped onion </li>
        <li> 1 egg </li>
        <li> 1 tsk salt </li>
        <li> 1 krm pepper </li>
        <li> 1 tsk ground nutmeg</li>
        <li> butter </li>
    </ul>
    <h3><b> Steps:</b> </h3>
    <ol class= "steps">
        <li> Mix bread and cream. Let swell. </li>
        <li> Add the mince beef, onion, eggs, salt, pepper and nutmeg and stir until smooth.  </li>
        <li> Roll into small buns, the smaller the better, and fry in butter. </li>
        <li> Serve with mashed potatoes, lingon sauce and possibly cream sauce. </li>

    </ol>
   <p><b>Comments</b></p>
   <?php
        include "comment.php";
        if(isset($_SESSION['u_uid']))
            include "writeComment.php";
        else
            echo"Please login to comment!"
   ?>

    </main>
</body>
</html>
