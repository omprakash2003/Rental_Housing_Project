<?php
include_once("db_con.inc");
extract($_GET);

$rs=mysqli_query($conn, "select * from tenant where sl= '$sl'");
while($rw=mysqli_fetch_array($rs))
{
    
?>

<center>
<p>&nbsp;
<p>&nbsp;
<link rel="stylesheet" href="link_style.css">

<form type=get action="tenant_report2.php?sl=<?php echo $sl; ?>">
<table border=1 width=37% >
<tr>
<th bgcolor=#000055><font color=white>New Report
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=70%>
<tr><td>&nbsp;
<tr>
<td>User ID = <td><input type=text name=usrid value=<?php echo $usrid; ?> readonly>
<tr>
<td>Month = <td><input type=text name=mn placeholder='Enter Month'>
<tr>
<td>Monthly Rent = <td><input type=text name=mnr value='<?php echo $mnr; ?>'>
<tr>
<td>Elec. Bf = <td><input type=text name=bf value='<?php echo $af; ?>'>
<tr>
<td>Elec. Af = <td><input type=text name=af placeholder='Enter Elec. AF'>
<tr>
<td>Total Paid = <td><input type=text name=tp placeholder='Enter Total Paid'>
<tr>
<td>Date of Payment = <td><input type=date name=dop >
<tr>
<td>Payment Mode = <td><input type=text name=pm placeholder='Enter Payment Mode'>
<tr>
<td>Remark = <td><input type=text name=rmk placeholder='Enter Remark'>
<tr><td>&nbsp;
<tr>
<td align=center colspan=2><input type="submit" value="submit"> <input type="Reset" value="Clear">
<tr><td>&nbsp;
</table>
</table>

<?php
}

echo "<br>";
echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";

?>
<p>&copy; OMI - 2022