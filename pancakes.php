<?php
    session_start();
    $_SESSION['page']="pancakes.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pancakes</title>
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
    <img src ="pannkakor.jpg" alt="pankakes" style="width: 250px;height: 150px;">
    <h3><b> Ingredients:</b> </h3>
    <ul class= "ingredients">
        <li> 3 eggs </li>
        <li> 5 dl milk </li>
        <li> 5 dl of wheat flour </li>
        <li> 2 tsk baking powder </li>
        <li> 1 tsk salt </li>
        <li> 1 msk sugar </li>
    </ul>
    <h3> <b> Steps:</b> </h3>
    <ol class= "steps">
        <li> Crack the eggs and divide the yolks and whites. Whisk the egg yolks with the milk. </li>
        <li> Mix all the dry ingredients and sift them in egg and milk mixture.  Beat until smooth.  </li>
        <li>  Hard-wipe the egg whites and gently turn into the batter. Let swell for half an hour.  </li>
        <li> Fry the pancakes of about 10-12 cm in diameter on a low heat until they become thick and airy. </li>
        <li> Serve with fresh berries and maple syrup. Sprinkle with a bit sugar if you want. </li>
    </ol>
        <p><b>Comments</b></p>
    <?php
        include "comment.php";
        if(isset($_SESSION['u_uid']))
            include "writeComment.php";
        else
            echo "Please login to comment!"
   ?>
   </main>
</body>
</html>
