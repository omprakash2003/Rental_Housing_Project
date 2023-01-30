<?php
include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from owner where owner_id= '$onrid'");
if($rw=mysqli_fetch_array($rs))
{
?>
<center>
<p>&nbsp;
<p>&nbsp;
    <form method="get" action="update_owner2.php">
    <table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Updation Form
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=500>
    <tr><td>&nbsp;
    <tr>
    <td>Owner ID : <td><input type="text" name="onrid" value='<?php echo $rw["owner_id"]; ?>' readonly>
    <tr>
    <td>Name : <td><input type="text" name="nm" value='<?php echo $rw["name"]; ?>'>
    <tr>
    <td>Mobile : <td><input type="text" name="mob" value='<?php echo $rw["mobile"]; ?>' pattern="[0-9]{10}">
    <tr>
    <td>Email : <td><input type="email" name="eml" value='<?php echo $rw["email"]; ?>' >
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Update"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>
<p>&copy; OMI - 2022
<?php
}
else
{
    echo "<center>The USER ID does Not Exist";
}
?>