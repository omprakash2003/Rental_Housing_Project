<?php
include_once("db_con.inc");

extract($_GET);

?>
<link rel="stylesheet" href="link_style.css">
<center>
<p>&nbsp;
<p>&nbsp;
<form method="get" action="tenant_profile2.php?user_id=<?php echo $usrid; ?>&nm=<?php echo $nm; ?>'">
<table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Profile 
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr bgcolor=#aaaaaa>
    <tr>
    <td>User ID = <td><input type=text name=usrid value=<?php echo $usrid; ?> readonly>
    <tr>
    <td>Tenant Name = <td><input type=text name=nm value=<?php echo $nm; ?> readonly>
    <tr>
    <td>Refered From = <td><input type=text name=rff placeholder='Refered From'>
    <tr>
    <td>Date of Joining = <td><input type=date name=dj placeholder='Enter Join date'>
    <tr>
    <td>Date of Leaving = <td><input type=date name=dl placeholder='Enter leave date'>
    <tr>
    <td>Room Rent = <td><input type=text name=rr placeholder='Enter Room Rent'>
    <tr>
    <td>Mobile = <td><input type=text name=mob placeholder='Enter Mobile' pattern="[0-9]{10}">
    <tr>
    <td>Advance Paid = <td><input type=text name=adv placeholder='Enter Advance paid'>
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Register"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>
<?php
echo "<br>";
echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";
?>
<p>&copy; OMI - 2022