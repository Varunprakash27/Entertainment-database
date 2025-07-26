<?php
$sn="localhost";
$un="root";
$psd="";
$conn=mysqli_connect($sn,$un,$psd);
if(!$conn)
{
    echo"error : ".mysqli_connect_error();
}
else
{
   // echo"connecion success....!<br>";
}
$sn="localhost";
$un="root";
$psd="";
$dbn="quiz";
$conn=mysqli_connect($sn,$un,$psd,$dbn);
if(!$conn)
{
    echo"error : ".mysqli_connect_error();
}
else
{
   // echo"DATABASE connecion success....!";
}
?>