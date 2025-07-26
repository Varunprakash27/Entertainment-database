<html>
<head>
    <link rel="stylesheet" href="main1.css">
</head>
<body>
<?php
session_start();

?>
<div class="fm">
 <h1>CHOOSE AND ENJOY</h1>
 <form  action="timer.php" method="POST">
    <br>
    <input id=1  class="c1" type="radio" name="op" value="quiz"/>
    <label for=1 id="x1"><b>QUIZ<b></label>
    <br><br>
    <input id=2  class="c2" type="radio" name="op" value="game"/>
    <label for=2 id="x2"><b>GAMES<b></label>
    <br>
    <input class="i1" type="submit" value="submit"/>
    <br>
  </form>
</div>
</body>
</html>