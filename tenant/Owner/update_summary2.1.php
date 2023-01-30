<?php
include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from details where user_id= '$usrid'");
if($rw=mysqli_fetch_array($rs))
{
?>
<link rel="stylesheet" href="link_style.css">
<center>
<p>&nbsp;
<p>&nbsp;
    <form method="get" action="update_summary2.2.php">
    <table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Updation Form.....
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=500>
    <tr><td>&nbsp;
    <tr>
    <td>User ID : <td><input type="text" name="usrid" value="<?php echo $rw['user_id']; ?>" readonly>
    <tr>
    <td>Name : <td><input type="text" name="nm" value="<?php echo $rw['tenant_name']; ?>" readonly>
    <tr>
    <td>Referred From : <td><input type="text" name="rff" value="<?php echo $rw['referred_from']; ?>" pattern="[A-Za-z]{1,50}">
    <tr>
    <td>Date of Joining : <td><input type="date" name="dj" value="<?php echo $rw['date_of_join']; ?>" >
    <tr>
    <td>Date of Leaving : <td><input type="date" name="dl" value="<?php echo $rw['date_of_leaving']; ?>">
    <tr>
    <td>Room Rent : <td><input type="text" name="rr" value="<?php echo $rw['room_rent']; ?>" pattern="[0-9]{4}">
    <tr>
    <td>Mobile : <td><input type="text" name="mob" value="<?php echo $rw['mobile']; ?>" pattern="[0-9]{10}">
    <tr>
    <td>Advance Paid : <td><input type="text" name="adv" value="<?php echo $rw['advance_paid']; ?>" pattern="[0-9]{4}">
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Update">
    <tr><td>&nbsp;
</table>
</table>
<?php
echo "<br>";
echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";
}
else
{
    echo "<center>The USER ID does Not Exist";
}
?>
<p>&nbsp;
<p>&copy; OMI - 2022