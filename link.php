<?php
session_start();
$_SESSION['subject']="";
$_SESSION['msub']="";
function f1()
{
  $_SESSION['subject']="general_k";
  $_SESSION['msub']="gk.php";
  header("refresh:0; url=gk.php");
}
function f2()
{
  $_SESSION['subject']="aptitude";
  $_SESSION['msub']="apt.php";
  header("refresh:0; url=apt.php");
}
function f3()
{
  $_SESSION['subject']="sports";
  $_SESSION['msub']="sp.php";
  header("refresh:0; url=sp.php");
}
function f4()
{
  $_SESSION['subject']="ind";
  $_SESSION['msub']="ai.php";
  header("refresh:0; url=ai.php");
}
function f5()
{
  $_SESSION['subject']="physics";
  $_SESSION['msub']="phy.php";
  header("refresh:0; url=phy.php");
}
function f6()
{
 header("refresh:0; url=tic.html ");
}
function f7()
{
  header("refresh:0; url=trtindex.html");
}
function f8()
{
  header("refresh:0; url=skindex.html");
}
function f9()
{
  header("refresh:0; url=mem.html");
}
$x1='';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $x1=$_POST['ch'];
}
if($x1=="gk")
{
  f1();
}
if($x1=="apt")
{
  f2();
}
if($x1=="sp")
{
  f3();
}
if($x1=="ai")
{
  f4();
}
if($x1=="phy")
{
  f5();
}
if($x1=="tic")
{
  f6();
}
if($x1=="ter")
{
  f7();
}
if($x1=="snk")
{
  f8();
}
if($x1=="mem")
{
  f9();
}
?>