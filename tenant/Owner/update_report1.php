<?php
include_once("db_con.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from tenant where sl='$sl' ");
if($rw=mysqli_fetch_array($rs))
{
?>
    <form method="get" action="update_report2.php?sl=<?php echo $sl; ?>&usrid=<?php echo $usrid; ?>">
    <link rel="stylesheet" href="link_style.css">
    <center>
    <p>&nbsp;
    <p>&nbsp;
    <table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Updation Form
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr>
    <td>User ID = <td><input type=text name=usrid value="<?php echo $rw['user_id']; ?>" readonly>
    <input type=hidden name=sl value='<?php echo $sl; ?>'>
    <tr>
    <td>Month = <td><input type=text name=mn value="<?php echo $rw['month']; ?>">
    <tr>
    <td>Monthly Rent = <td><input type=text name=mnr value="<?php echo $rw['monthly_rent']; ?> ">
    <tr>
    <td>Elec. Bf = <td><input type=text name=bf value="<?php echo $rw['elec_bf']; ?>">
    <tr>
    <td>Elec. Af = <td><input type=text name=af value="<?php echo $rw['elec_af']; ?>">
    <tr>
    <td>Total Paid = <td><input type=text name=tp value="<?php echo $rw['total_paid']; ?>">
    <tr>
    <td>Date of Payment = <td><input type=date name=dop value="<?php echo $rw['date_of_payment']; ?>">
    <tr>
    <td>Payment Mode = <td><input type=text name=pm value="<?php echo $rw['payment_mode']; ?>">
    <tr>
    <td>Remark = <td><input type=text name=rmk value="<?php echo $rw['remark']; ?>">
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2>
    <input type="submit" value="Update"> <input type="Reset" value="Clear">
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
    echo "<center>The USER does Not Exist";
}
?>
<p>&copy; OMI - 2022