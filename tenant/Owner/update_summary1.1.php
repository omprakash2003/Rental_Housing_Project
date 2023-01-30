<?php
include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from reg where user_id= '$usrid'");
if($rw=mysqli_fetch_array($rs))
{
?>
      <link rel="stylesheet" href="link_style.css">

<center>
<p>&nbsp;
<p>&nbsp;
    <form method="get" action="update_summary1.2.php">
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
    <td>User ID : <td><input type="text" name="usrid" value="<?php echo $rw['user_id']; ?>" readonly>
    <tr>
    <td>Name : <td><input type="text" name="nm" value="<?php echo $rw['tenant_name']; ?>">
    <tr>
    <td>Apartment ID : <td><input type="text" name="aprtmnt" value="<?php echo $rw['room_id']; ?>">
    <tr>
    <td>Mobile : <td><input type="text" name="mob" value="<?php echo $rw['mobile']; ?>" pattern="[0-9]{10}">
    <tr>
    <td>Email : <td><input type="email" name="eml" value="<?php echo $rw['email']; ?>">
    <tr>
    <td>
        <label for=idtyp>Choose ID Type : <td></label>
                        <select name=idtyp>
                            <option value="Adhar card">Adhar Card</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Pan Card">Pan Card</option>
                            <option value="Ration Card">Ration Card</option>
                        </select>
    <tr>
    <td>ID Number : <td><input type="text" name="idno" value="<?php echo $rw['id_no']; ?>" >
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Update"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>

<?php
echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";
}
else
{
    echo "<center>The USER ID does Not Exist";
}
?>
<p>&copy; OMI - 2022