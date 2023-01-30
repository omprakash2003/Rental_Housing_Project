<?php
include_once("db_con.inc");
?>
      <link rel="stylesheet" href="link_style.css">

<center>
<p>&nbsp;
<p>&nbsp;
    <table border=1 width=1250 bordercolor=#000055 style='border-collapse:collapse'>
    <tr>
    <th bgcolor=#000055><font color=white>Rooms
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=1200>
    <tr><td>&nbsp;
    <tr bgcolor=#aaaaaa>
    <th>Room ID
    <th>Type
    <th>Rent
    <th>Status
        
<?php
$rs=mysqli_query($conn, "SELECT * FROM apartment WHERE room_id in(select room_id from reg)");

while($rw=mysqli_fetch_array($rs))
{
    
    $aprtmnt=$rw[0];
    echo "<tr>";
    echo "<td>$rw[0]";
    echo "<td>$rw[1]";
    echo "<td>$rw[2]"; 

{
    echo "<td><p style='color:#ff0000'>Not Available";
}
}
$rs=mysqli_query($conn, "SELECT * FROM apartment WHERE room_id not in(select room_id from reg)");

while($rw=mysqli_fetch_array($rs))
{
    
    $aprtmnt=$rw[0];
    echo "<tr>";
    echo "<td>$rw[0]";
    echo "<td>$rw[1]";
    echo "<td>$rw[2]"; 
{
    echo "<td><p style='color:#00c04b'>Available";
}
}

?>

<tr><td>&nbsp;
</table>
</table>
<?php

echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";
echo "<div class='signup_link'>
<a href=apartment1.php>Add New Apartment</a>
        </div>";
?>
<p>&nbsp;
    
<p>&copy; OMI - 2022
   
   