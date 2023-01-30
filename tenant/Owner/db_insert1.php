<?php

include_once("db_con.inc");

extract($_GET);

$rs=mysqli_query($conn,"select * from owner order by owner_id desc");
$cd="";
if($rw=mysqli_fetch_array($rs))
{
$cd1=$rw['owner_id'];                 //owner0100
$cd1=substr($cd1, 5);           //0100
$n=$cd1;                        //100
$n++;                           //101
if($n>=0 && $n<10)
    $cd="Owner000".$n;
else if($n>=10 && $n<100)
    $cd="Owner00".$n;
else if($n>=100 && $n<1000)
    $cd="Owner0".$n;
else if($n>=1000 && $n<10000)
    $cd="Owner".$n;
}
else
{
$cd="Owner0001";
}
    $qry="insert into owner values('$cd', '$onpass', '$nm', $mob, '$eml')";
    mysqli_query($conn, $qry);
?>

<center>
    Your are successfully registered......
    <p>Your Login ID : <b><?php echo $cd ?></b>
    <p>Your Login Password : <b><?php echo $onpass ?></b>

    <p><b>"You Will Auto Redirected to Login page to login in 5sec"<P>
                                <p>*<p>
    <p>"Please Remember your login ID and Password for successfull login"</b><p>


<?php
    if(isset($_GET["ttt"]))
    {
    echo "<meta http-equiv=refresh content='1;URL=..\Owner/Owner_summary.php' />";
    }
    else
    echo "<meta http-equiv=refresh content='5;URL=login1.php?abc=reg' />";
?>

