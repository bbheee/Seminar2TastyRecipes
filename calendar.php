<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Calendar</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="recipe.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">
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

<main><div class="calendar">
  <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2018</span></li>
  </ul>
</div>
  <ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li> </li>
  <li> </li>
  <li>1</li>
  <li>2</li>
  <li>3
    <a href="meatballs.php"><img alt ="Meatballs" src="kottbullar.jpg" class="days"></a></li>
  <li>4</li>
  <li>5</li>
  <li><span class="active">6</span></li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15
    <a href="pancakes.php"><img alt ="Pancakes" src="pannkakor.jpg"  class="days"></a></li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>
</main>
</body>
</html>
