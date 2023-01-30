<?php

include_once("db_con.inc");

extract($_GET);

$rs=mysqli_query($conn,"select * from details where user_id='$usrid'");
//$rw=mysqli_fetch_row($rs);
    $qry="insert into details values('$usrid', '$nm', '$rff', '$dj', '$dl', '$rr', '$mob', '$adv')";
    mysqli_query($conn, $qry);
?>
    
    <center>Inserted
    <meta http-equiv=refresh content="2;URL=tenant_summary2.php?usrid=<?php echo $usrid;?>&nm=<?php echo $nm; ?>" />





