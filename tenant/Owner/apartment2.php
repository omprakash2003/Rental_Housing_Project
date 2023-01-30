<?php

include_once("db_con.inc");

extract($_GET);

$rs=mysqli_query($conn,"select * from apartment where room_id='$rmid'");
if($rw=mysqli_fetch_row($rs))
{
    ?>
    <center><b>
    Already exists..
    <?php
}
else
{
    $qry="insert into apartment values('$rmid', '$typ', '$rnt')";
    mysqli_query($conn, $qry);
?>

<center>
    successfully registered......
    <meta http-equiv=refresh content="1;URL=apartment4.php" />
<?php
}
?>



