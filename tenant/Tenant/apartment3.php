<?php
include_once("db_con.inc");
extract($_GET);
?>

<center>
<p>&nbsp;
<p>&nbsp;
    <table border=1 width=1250 bordercolor=#000055 style='border-collapse:collapse'>
    <tr>
    <th bgcolor=#000055><font color=white>Room
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
    
    $aprtmnt=$rw['room_id'];
    echo "<tr>";
    echo "<td>$rw[room_id]";
    echo "<td>$rw[type]";
    echo "<td>$rw[rent]"; 

     //$aprtmnt=$_GET['aprtmnt'];
    //if(strcmp($aprtmnt, $aprtmnt)==0)
{
    echo "<td><p style='color:#ff0000'>Not Available";
}
}
$rs=mysqli_query($conn, "SELECT * FROM apartment WHERE room_id not in(select room_id from reg)");

while($rw=mysqli_fetch_array($rs))
{
    
    $aprtmnt=$rw['room_id'];
    $rnt=$rw['rent'];
    echo "<tr>";
    echo "<td>$rw[room_id]";
    echo "<td>$rw[type]";
    echo "<td>$rw[rent]"; 

     //$aprtmnt=$_GET['aprtmnt'];
    //if(strcmp($aprtmnt, $aprtmnt)==0)
{
    // echo "<td><a href=apartment_book.php?aprtmnt=$aprtmnt&usrid=$usrid&rnt=$rnt> Book On Click";
    echo "<td><p style='color:#00ff00'>Available";

}
}
?>

<tr><td>&nbsp;
</table>
</table>
<?php
?>
<!-- <p>&copy; OMI - 2022 -->
   
   