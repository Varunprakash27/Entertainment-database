
<html>
<head>
  <link rel="stylesheet" href="delete.css" />  
</head>
</html>
<?php
require 'server.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['v1'];
}
$d1="delete from  result_base where name='$name' ";
 $t1=mysqli_query($conn,$d1);
 if($t1)
 {
    ?>
    <html>
    <head>
        <h2>Data deleted successfully</h2>
    </head>
    <body>
    </body>
    </html>
    <?php
     header("refresh:1; url=login.php");
 
 }

?>
 
 