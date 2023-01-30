<?php

include_once("db_con.inc");

extract($_GET);
// $room_id="aprtmnt";
$rs=mysqli_query($conn,"insert into reg (room_id, user_id, rent) values ($aprtmnt, $usrid, $rnt)");

?>
    
    <center>Bhai teko Room mil gya ja kr maze
    <meta http-equiv=refresh content="2;URL=login3.php"/>

<!-- set room rent -->