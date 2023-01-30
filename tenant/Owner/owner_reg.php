<?php
if(isset($_GET["ttt"]))
{

?>

<center>
<p>&nbsp;
<p>&nbsp;
<form type=get action=db_insert1.php>

<table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Owner Registration
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr>
    <td>Name : <td><input type=text name=nm placeholder='Enter Your Name' required>
    <tr>
    <td>Owner Password : <td><input type="password" name="onpass" placeholder="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contains at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <tr>
    <td>Mobile : <td><input type=text name=mob placeholder='Enter Your Mobile No.' pattern="[0-9]{10}" required >
    <tr>
    <td>E-Mail : <td><input type=email name=eml placeholder='Enter Your Email'>
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Register"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>

<input type='hidden' name=ttt value=ttt>
<?php


}
else
{


?>

<center>
<p>&nbsp;
<p>&nbsp;
<form type=get action=db_insert1.php>

<table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Owner Registration
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr>
    <td>Name : <td><input type=text name=nm placeholder='Enter Your Name' required>
    <tr>
    <td>Owner Password : <td><input type="password" name="onpass" placeholder="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contains at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <tr>
    <td>Mobile : <td><input type=text name=mob placeholder='Enter Your Mobile No.' pattern="[0-9]{10}" required >
    <tr>
    <td>E-Mail : <td><input type=email name=eml placeholder='Enter Your Email'>
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Register"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>

<?php
}
?>