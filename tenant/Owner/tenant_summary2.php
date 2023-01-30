<?php
include_once("db_con.inc");
extract($_GET);
?>

<link rel='stylesheet' href='link_style.css'>
<center>
<p>&nbsp;
<p>&nbsp;
<table border=1 width=85% style='border-collapse:collapse' bordercolor=#000055>
<tr>
<th bgcolor=#000055><font color=white>Tenant Profile
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=84%>
<tr><td>&nbsp;
<tr><td>
<tr bgcolor=#aaaaaa> 
<th>User ID  
<th>Tenant Name  
<th>Referred From
<th>Date of Joining
<th>Date of Leaving
<th>Room Rent
<th>Mobile
<th>Advance Paid

<?php
$rs=mysqli_query($conn, "select * from details where user_id='$usrid'");

if($rw=mysqli_fetch_array($rs))
{
    $nm=$rw['tenant_name'];
    $mnr=$rw['room_rent'];
    echo "<tr>";
    echo "<td>$rw[user_id]";
    echo "<td>$rw[tenant_name]";
    echo "<td>$rw[referred_from]";
    echo "<td>$rw[date_of_join]";
    echo "<td>$rw[date_of_leaving]";
    echo "<td>$rw[room_rent]";
    echo "<td>$rw[mobile]";
    echo "<td>$rw[advance_paid]";

    
    echo  "<td><div class='signup_link'>
                    <a href='update_summary2.1.php?usrid=$usrid'>Update </a></b>
                </div>";
    echo  "<td><div class='signup_link'>
                    <a href=tenant_report3.php?usrid=$usrid&mnr=$mnr>Report</a></b>
                </div>";
    echo  "<td><div class='signup_link'>
                    <a href=login3.php>Home Page</a></b>
                </div>";
}

else
{
   
        echo "<tr>";
        echo "<td>$rw[user_id]";
        echo "<td>$rw[tenant_name]";
        echo "<td>$rw[referred_from]";
        echo "<td>$rw[date_of_join]";
        echo "<td>$rw[date_of_leaving]";
        echo "<td>$rw[room_rent]";
        echo "<td>$rw[mobile]";
        echo "<td>$rw[advance_paid]";
    
    
    ?>
    <tr><td>&nbsp;
    </table>
    </table>
    <?php

        echo  "<td><div class='signup_link'>
        <a href='tenant_profile1.php?usrid= $usrid&nm=$nm'>Add Tenant Profile</a></b>
                </div>";
        echo  "<td><div class='signup_link'>
        <a href=tenant_report3.php?usrid=$usrid>Report</a></b>
                </div>";
        echo  "<td><div class='signup_link'>
        <a href=login3.php>Home Page </a></b>
                </div>"
    ?>
    <p>&nbsp;
    <p>&copy; Made by Omi
        <?php
}

?>