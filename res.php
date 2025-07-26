    <html>
    <head>
        <link rel="stylesheet" href="res.css" />
        <script src="https://kit.fontawesome.com/c1cb799ae1.js" crossorigin="anonymous"></script>
        
    </head>   
    <body>
      <div class="c1">
    <?php
     session_start();
     $sb=$_SESSION['subject'];
     $ms=$_SESSION['msub'];
   
        if($_SESSION['quit']==TRUE)
        {
           $_SESSION['ANS']=NULL;
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $_SESSION['ANS']=$_POST["var"];
            }    
            $s2=$_SESSION['tmp'];
            $s3=$_SESSION['ANS'];
            if($s2>0)
            {
              require 'server.php';
              $q1="select * from $sb where sn=$s2 ";
              $q12=mysqli_query($conn,$q1);
              $q13=mysqli_fetch_assoc($q12);
              if($s3==($q13['ans']))
                {
                   echo "<h2>You are correct..</h2>";
                   $_SESSION['result']+=1;
                }   
                
                else
                {
                  echo "<h2>OOPS! You are wrong..</h2>";
                }
            }
             header("refresh:1; url=$ms");   
          }  
          else
          {
           header("refresh:1; url=$ms");
          }            
    ?>
    </div>
    </body>
    </html>
    