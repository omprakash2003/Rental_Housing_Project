<?php

include_once("db_con.inc");

extract($_GET);

$rs=mysqli_query($conn,"select * from tenant order by sl desc");
//$rw=mysqli_fetch_row($rs);
$sl="";
if($rw=mysqli_fetch_array($rs))
{
    $sl=$rw[0];
    $sl=$sl+1;
    $tu=$af-$bf;
    $eamt=$tu*6;
    $tamt=$eamt+$mnr;
    $rmn=$tamt-$tp; 
}
else
{
    $sl="1";
    $tu=$af-$bf;
    $eamt=$tu*6;
    $tamt=$eamt+$mnr;
    $rmn=$tamt-$tp; 
}
    $qry="insert into tenant values('$sl','$usrid', '$mn', '$mnr', '$bf', '$af', '$tu', '$eamt', '$tamt', '$tp', '$dop', '$pm', '$rmn', '$rmk')";
    mysqli_query($conn, $qry);
?>
    
    <center>Inserted
    <meta http-equiv=refresh content="5;URL=tenant_report3.php?usrid=<?php echo $usrid; ?>" />





