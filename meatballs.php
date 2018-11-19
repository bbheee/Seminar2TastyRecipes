<?php
    session_start();
    $_SESSION['page']="meatballs.php";
    $cookbook = simplexml_load_file("recipes.xml");
    $recipeNo= 1;

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
    <img class= "image" src ="<?php echo $cookbook->recipe[$recipeNo]->imagepath; ?>"
     /> <br/>
    <?php echo $cookbook->recipe[$recipeNo]->quantity; ?> <br/>
    <?php echo $cookbook->recipe[$recipeNo]->cooktime; ?> <br/>
    <h3><b> Ingredients:</b> </h3>
    <ul class= "ingredients">
        <?php foreach ($cookbook->recipe[$recipeNo]->ingredient->li as $ingredient){
              echo "<li> $ingredient </li>";
              }
        ?>
    </ul>
    <h3><b> Steps:</b> </h3>
    <ol class= "steps">
         <?php foreach ($cookbook->recipe[$recipeNo]->recipetext->li as $recipetext){
                echo "<li> $recipetext </li>";
              }
        ?>
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
