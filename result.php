<html>
    <center>
        <link rel="stylesheet" href="result1.css" />
        <h1>Your results..</h1>
        
        <br>
        <br>
<head>
<script src="https://kit.fontawesome.com/c1cb799ae1.js" crossorigin="anonymous"></script>
 
</head>
<body>

<?php
session_start();
function abx()
{
    ?>
    <form action="delete.php"  method="POST">
      <h4>click YES to delete your contents from Database :<button type='submit' name='v1' value='<?php echo $_SESSION['name']; ?>'>YES</button></h4>
    </form>
    <?php
}
    
    $sub=$_SESSION['subject'];
    $x1=$_SESSION['result'];
    $tmp1=$_SESSION['name'];
    $tmp2=$_SESSION['mid'];
    ?>
    <h2><?php echo"NAME : $tmp1";?></h2>
    <h2><?php echo"SCORE : $x1";?></h2>
    <h3 id="i1"></h3>
    <?php
    require 'server.php';
    $x13="insert into result_base values ('','$tmp1','$tmp2','$sub',$x1)";
    $x14=mysqli_query($conn,$x13);
    $q1="call findmax(@v1,'$sub');";
    $q2=mysqli_query($conn,$q1);
    $q21=mysqli_query($conn,"select @v1");
    $q3=mysqli_fetch_assoc($q21);
    $res=implode(' ',$q3);
    session_destroy();
    ?>
    <script>
        document.getElementById("i1").innerHTML="Highest score : <?php echo $res;?>";
    </script>
     <form action="main.php">
    <button id="i10"><i class="fa-solid fa-house"></i></button>
     </form>
    <?php
     abx();
     ?>
</body>
</center>
</html>