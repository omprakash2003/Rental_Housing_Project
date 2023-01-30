
<?php
include_once("db_con.inc");
?>

<center>
<p>&nbsp;
<p>&nbsp;
<table border=1 width=90% style='border-collapse:collapse' bordercolor=#000055>
<tr>
<th bgcolor=#000055><font color=white>Report
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=90%>
<tr><td>&nbsp;
<tr bgcolor=#aaaaaa> 

<th>User ID  
<th>Month
<th>Monthly Rent
<th>Elec. (B.F)
<th>Elec. (A.F)
<th>Total Unit
<th>Elec. Amt.
<th>Total Amt.
<th>Total Paid
<th>Remain
<th>Date of Payment
<th>Payment Mode 
<th>Remark

<?php
extract($_GET);
$rs=mysqli_query($conn, "select * from tenant where user_id='$usrid'");
while($rw=mysqli_fetch_array($rs))
{
    $sl=$rw[0];

    echo "<tr>";
    echo "<td>$rw[user_id]";
    echo "<td>$rw[month]";
    echo "<td>$rw[monthly_rent]";
    echo "<td>$rw[elec_bf]";
    echo "<td>$rw[elec_af]";
    echo "<td>$rw[total_unit]";
    echo "<td>$rw[elec_amt]";
    echo "<td>$rw[total_amt]";
    echo "<td>$rw[total_paid]";
    echo "<td>$rw[remain]";
    echo "<td>$rw[date_of_payment]";
    echo "<td>$rw[payment_mode]";
    echo "<td>$rw[remark]";
}
?>
</table>
</table>
<br>
<br>
<br>
<button onclick='window.print()' >Print</button>
