<?php
session_start();       //this will be first line not a single space 

include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from reg where user_id='$usrid' and pass='$pass'");
if($rw=mysqli_fetch_array($rs))
{
    $_SESSION['usrid']=$usrid;
   $_SESSION['nm']=$rw[2]; 
   $_SESSION['aprtmnt']=$rw[3];
    header("Location: login3.php");
}
else
{                               //Query String
    header("Location: login1.php?abc=inv");
}
?>