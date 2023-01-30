<?php
include_once("db_con.inc");
extract($_GET);

?>

<link rel='stylesheet' href='link_style.css'>
<center>
<p>&nbsp;
<p>&nbsp;
    <table border=1 width=85% bordercolor=#000055 style='border-collapse:collapse'>
    <tr>
    <th bgcolor=#000055><font color=white>Tenant Sheet
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=84%>
    <tr><td>&nbsp;
    <tr bgcolor=#aaaaaa>
    <th>User ID
    <th>Password
    <th>Tenant Name
    <th>Room ID
    <th>Mobile
    <th>Email
    <th>ID type
    <th>ID Number

<?php
$rs=mysqli_query($conn, "select * from reg");
while($rw=mysqli_fetch_array($rs))
{
    
    $usrid=$rw[0];
    $nm=$rw[2];
    echo "<tr>";
    echo "<td>$rw[user_id]";
    echo "<td>$rw[pass]";
    echo "<td>$rw[tenant_name]"; 
    echo "<td>$rw[room_id]";
    echo "<td>$rw[mobile]";
    echo "<td>$rw[email]";
    echo "<td>$rw[id_type]";
    echo "<td>$rw[id_no]";

    echo  "<td><div class='signup_link'>
                <a href=tenant_summary2.php?usrid=$usrid&nm=$nm>Tenant Profile </a></b>
                </div>";
    echo  "<td><div class='signup_link'>
                <a href=update_summary1.1.php?usrid=$usrid>Update </a></b>
                </div>";
}
?>

<tr><td>&nbsp;
</table>
</table>

<?php
echo "<input type='hidden' name=ttt value=ttt>";
echo  "<td><div class='signup_link'>
                <a href='..\Tenant/tenant_reg.php?usrid=$usrid&ttt'>Add New Tenant</a></b>
            </div>";
echo  "<td><div class='signup_link'>
                <a href=login3.php>Home Page </a></b>
            </div>";
?>
<br>
<p>&copy; OMI - 2022
   
   