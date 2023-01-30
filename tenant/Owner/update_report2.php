<?php
include_once("db_con.inc");
extract($_GET);

$tu=$af-$bf;
$eamt=$tu*6;
$tamt=$eamt+$mnr;
$rmn=$tamt-$tp; 

mysqli_query($conn, "update tenant set month='$mn', monthly_rent='$mnr', elec_bf='$bf', elec_af='$af', total_unit='$tu', elec_amt='$eamt', total_amt='$tamt', total_paid='$tp',  date_of_payment='$dop', payment_mode='$pm',  remain='$rmn', remark='$rmk' where sl='$sl'");

?>
<head>
<meta http-equiv=refresh content="2;URL=tenant_report3.php?sl=<?php echo $sl; ?>&usrid=<?php echo $usrid; ?>" />

</head>
<center>
your record has been successfully updated
