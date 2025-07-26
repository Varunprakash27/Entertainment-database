<?php
    session_start();
    $sub=$_SESSION['subject'];
    $x1=$_SESSION['result'];
    $tmp1=$_SESSION['name'];
    $tmp2=$_SESSION['mid'];
    ?>
    <h2><?php echo"NAME : $tmp1";?></h2>
    <h2><?php echo"SCORE : $x1";?></h2>
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