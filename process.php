
<?php
function xyz()
{
    header("refresh:0; url=main.php");
}
function abc()
{
    header("refresh:1; url=login.php");
    die();
    
}


session_start();
$_SESSION['v']=0;
$_SESSION['mid']="";
$_SESSION['name']="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_SESSION['name']=$_POST['d1'];
    $_SESSION['mid']=$_POST['d2'];

}
if($_SESSION['name']==NULL)
{
    $_SESSION['v']=1;
    require 'error.php';
    abc();
    
    
}
if($_SESSION['mid']==NULL)
{
     $_SESSION['v']=2;
     require 'error.php';
     abc();
}
$nme=$_SESSION['name'];
$mid=$_SESSION['mid'];
$_SESSION['det']=0;
require 'server.php';
$q1="select * from login_details";
$q12=mysqli_query($conn,$q1);
$count=mysqli_num_rows($q12);
if($count>0)
{
    while($q13=mysqli_fetch_assoc($q12))
    {
        if(($nme==$q13['name'])&&($mid==$q13['mail_id']))
        {
            $V1=1;
            $s1="select id from login_details where mail_id=\"$mid\" ";
            $s12=mysqli_query($conn,$s1);
            $s13=mysqli_fetch_assoc($s12);
            $_SESSION['det']=$s13['id'];
            $x=$_SESSION['det'];
            $_SESSION['res1']=$x;
            xyz();
            die();
        }
    }
    $q2="insert into login_details values('','$nme','$mid')";
    $x=mysqli_query($conn,$q2);
    $V2=2;
    $s1="select id from login_details where mail_id=\"$mid\" ";
    $s12=mysqli_query($conn,$s1);
    $s13=mysqli_fetch_assoc($s12);
    $_SESSION['det']=$s13['id'];
    $x=$_SESSION['det'];
    $_SESSION['res1']=$x;
    xyz();
    die();
    
}
else
{
    $q2="insert into login_details values('','$nme','$mid')";
    $q22=mysqli_query($conn,$q2);
    $V3=3;
     $s1="select id from login_details where mail_id=\"$mid\" ";
    $s12=mysqli_query($conn,$s1);
    $s13=mysqli_fetch_assoc($s12);
    $_SESSION['det']=$s13['id'];
    $x=$_SESSION['det'];
    $_SESSION['res1']=$x;
    xyz();
    die();
}

?>



