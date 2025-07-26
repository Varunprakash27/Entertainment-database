<html>
<center>    
<head>
  <link rel="stylesheet" href="quiz.css"/>
  <script src="https://kit.fontawesome.com/c1cb799ae1.js" crossorigin="anonymous"></script>
  <?php
session_start();
$_SESSION['tmp']+=1;
$s1=$_SESSION['tmp'];

if($s1<=5)
{  
  ?>
  <h2><b>PHYSICS</b></h2>
  <h3 id="i1">.</h3>
  <?php
  $_SESSION['quit']=TRUE;
  ?>
  
  <script>
        var x=15;
        function print()
        {
          if(x>0)
          {
          document.getElementById("i1").innerText="Time Ends in "+x;
          x--;
          }
          else
          {
             <?php $_SESSION['quit']=FALSE; ?>
          }
        }
        setInterval(print,1000);
  </script>
   </head>
  <body>
  <?php
        require 'server.php';
        $q1="select * from physics  where sn=$s1";
        $q12=mysqli_query($conn,$q1);
        $q13=mysqli_fetch_assoc($q12);
        $a1=$q13["question"];
        $a2=$q13['c1'];
        $a3=$q13['c2'];
        $a4=$q13['c3'];
        ?>
     
      <form action="res.php" method="POST">
      <div class="c1">
        <p><?php echo $a1; ?></p> 
        </div>
        <input  type="radio" name="var" value="<?php echo $a2; ?>" id=1 />
        <label class="x1" for=1><?php echo $a2; ?></label>
        <br>
        <input  type="radio" name="var"  value="<?php echo $a3; ?>" id=2 />
        <label class="x2" for=2><?php echo $a3; ?></label>
        <br>
        <input  type="radio" name="var"  value="<?php echo $a4; ?>" id=3 />
        <label class="x3" for=3><?php echo $a4; ?></label>
        <br>
        <input class="x4" type="submit" value="submit" />
      </form>

      <?php                                           
      }
      if($_SESSION['quit']==FALSE)
      {
       $_SESSION['quit']=TRUE;
       header("refresh:10000; url=phy.php");
      }
    
                      
else
{
 header("refresh:0; url=result.php");
die();
}
?>
<form action="main.php">
      <button id="i10"><i class="fa-solid fa-house"></i></button>
</form>
</body>
</center>
</html>                                       
                
       
      