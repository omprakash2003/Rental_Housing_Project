<?php

include_once("db_con.inc");

extract($_GET);

$rs=mysqli_query($conn,"select * from reg order by user_id desc");
$cd="";
if($rw=mysqli_fetch_array($rs))
{
    $cd1=$rw['user_id'];                 //Tenant0100
    $cd1=substr($cd1, 6);           //0100
    $n=$cd1;                        //100
    $n++;                           //101
    if($n>=0 && $n<10)
        $cd="Tenant000".$n;
    else if($n>=10 && $n<100)
        $cd="Tenant00".$n;
    else if($n>=100 && $n<1000)
        $cd="Tenant0".$n;
    else if($n>=1000 && $n<10000)
        $cd="Tenant".$n;
}
else
{
    $cd="Tenant0001";
}
    $qry="insert into reg (user_id, pass, tenant_name, mobile, email, id_type, id_no) values ('$cd', '$pass', '$nm', $mob, '$eml', '$idtyp', '$idno')";
    mysqli_query($conn, $qry);

?>


    <center>
    Your are successfully registered......
    <p>Your Login ID : <b><?php echo $cd ?></b>
    <p>Your Login Password : <b><?php echo $pass ?></b>
  
    <p><b>"You Will Auto Redirected to Login page to login in 5sec"<P>
                                <p>*<p>
    <p>"Please Remember your login ID and Password for successfull login"</b><p>
<?php
    if(isset($_GET["ttt"]))
    {
    echo "<meta http-equiv=refresh content='1;URL=..\Owner/tenant_summary1.php' />";
    }
    else
    echo "<meta http-equiv=refresh content='5;URL=login1.php?abc=reg' />";
?>




