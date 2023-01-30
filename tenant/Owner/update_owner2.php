<?php
include_once("db_con.inc");
extract($_GET);

mysqli_query($conn, "update owner set owner_id='$onrid', name='$nm', mobile='$mob' , email='$eml' where owner_id='$onrid'");

?>
<head>
<meta http-equiv=refresh content="2;URL=owner_summary.php?onrid=<?php echo $onrid; ?>" />

</head>
<center>
your record has been successfully updated
