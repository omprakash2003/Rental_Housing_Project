<?php
include_once("db_con.inc");
extract($_GET);

mysqli_query($conn, "update details set referred_from='$rff', date_of_join='$dj', date_of_leaving='$dl', room_rent='$rr', mobile='$mob', advance_paid='$adv' where user_id= '$usrid'");
?>
<center>
your record has been successfully updated
<meta http-equiv=refresh content="2;URL=tenant_summary2.php?usrid=<?php echo $usrid; ?>" />
