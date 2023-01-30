<?php
include_once("db_con.inc");
extract($_GET);

mysqli_query($conn, "update reg set tenant_name='$nm', apartment_id='$aprtmnt', mobile='$mob', email='$eml', id_type='$idtyp', id_no='$idno' where user_id= '$usrid'");
?>
<center>
your record has been successfully updated
<meta http-equiv=refresh content="2;URL=tenant_summary1.php" />
