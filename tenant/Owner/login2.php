<?php
session_start();       //this will be first line not a single space 

include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from owner where owner_id='$onrid' and owner_pass='$onpass'");
if($rw=mysqli_fetch_array($rs))
{
    $_SESSION['onrid']=$onrid;
    $_SESSION['name']=$rw["name"];
    header("Location: login3.php");
}
else
{                               //Query String
    header("Location: login1.php?abc=inv");
}
?>