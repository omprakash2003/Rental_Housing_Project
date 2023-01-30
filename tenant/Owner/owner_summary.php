<?php
include_once("db_con.inc");
extract($_GET);
?>
      <link rel="stylesheet" href="link_style.css">

<center>
<p>&nbsp;
<p>&nbsp;
<table border=1 width=80% style='border-collapse:collapse' bordercolor=#000055>
<tr>
<th bgcolor=#000055><font color=white>Owner Summary
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=75%>
<tr><td>&nbsp;
<tr bgcolor=#aaaaaa> 
<th>User ID  
<th>Password  
<th>Owner Name
<th>Mobile
<th>E-Mail

<?php
$rs=mysqli_query($conn, "select * from owner");
$n=0;
while($rw=mysqli_fetch_array($rs))
{
    $onrid=$rw['owner_id'];
    echo "<tr>";
    echo "<td>$rw[owner_id]";
    echo "<td>$rw[owner_pass]";
    echo "<td>$rw[name]";
    echo "<td>$rw[mobile]";
    echo "<td>$rw[email]";
    echo "<td>";
    echo "<div class='signup_link'>
            <a href=update_owner1.php?onrid=$onrid>Update </a>
        </div>";

}

?>
<tr><td>&nbsp;
</table>
</table>
<?php
echo "<input type='hidden' name=ttt value=ttt>";

echo "<div class='signup_link'>
<a href='owner_reg.php?ttt'>Add New Owner</a>
        </div>";

echo "<div class='signup_link'>
<a href=login3.php>Home Page </a>
        </div>";
?>
<p>&copy; Made by Omi