
<?php




include_once("db_con.inc");
if(isset($_GET["abc"]))
{

}

?>
<link rel="stylesheet" href="link_style.css">
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
$af=0;
$rs=mysqli_query($conn, "select * from tenant where user_id='$usrid'");
while($rw=mysqli_fetch_array($rs))
{
    $sl=$rw['sl'];
    $usrid=$rw['user_id'];
    $mn=$rw['month'];
    $mnr=$rw['monthly_rent'];
    $bf=$rw['elec_bf'];
    $af=$rw['elec_af'];
    $tu=$rw['total_unit'];
    $eamt=$rw['elec_amt'];
    $tamt=$rw['total_amt'];
    $tp=$rw['total_paid'];
    $dop=$rw['date_of_payment'];
    $pm=$rw['payment_mode'];
    $rmn=$rw['remain'];
    $rmk=$rw['remark'];

    $tu=$af-$bf;
    $eamt=$tu*6;
    $tamt=$eamt+$mnr;

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
    echo "<td><div class='signup_link'>
                <a href=update_report1.php?sl=$sl&usrid=$usrid>Update </a>
            </div>";

}



?>
</table>
</table>

<?php

    $rs=mysqli_query($conn, "select * from tenant order by sl desc");
    $sl="";
if($af!=0)
{
    if ($rw=mysqli_fetch_array($rs))
    {
        
        $sl=$rw[0];
        // $sl=$sl+1;
        echo "<td><div class='signup_link'>
            <a href='tenant_report1.php?sl=$sl&usrid=$usrid&af=$af&mnr=$mnr'>Insert New Entry</a>
        </div>";
        echo "<td><div class='signup_link'>
            <a href=login3.php>Home Page </a>
        </div>";

    }
}

    
    else
    {
        $sl=$rw[0];
        $sl=$sl+1;
        $af=0;
        // $mnr=0;
        echo "<td><div class='signup_link'>
                <a href='tenant_report1.php?sl=$sl&usrid=$usrid&af=$af&mnr=$mnr'>Insert Entry</a>
            </div>";
        echo "<td><div class='signup_link'>
                  <a href=login3.php>Home Page </a>
                </div>";
    }

?>
<p>&nbsp;
<p>&copy; OMI - 2022
