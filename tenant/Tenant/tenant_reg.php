





<?php
if(isset($_GET["ttt"]))
{

?>
<center>
<p>&nbsp;
<p>&nbsp;
<form method=get action=db_insert.php>
<table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Tenant Registration
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr>
    <td>Name = <td><input type=text name=nm placeholder='Enter Your Name' pattern="[A-Za-z]{1,50}" required>
    <tr>
    <td>Password = <td><input type=password name=pass placeholder='Create Password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contains at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <tr>
    <td>Mobile = <td><input type=text name=mob placeholder='Enter Your Mobile No.' required pattern="[0-9]{10}">
    <tr>
    <td>E-Mail = <td><input type=email name=eml placeholder='Enter Your Email' >
    <tr>    
    <td><label for=idtyp>Choose ID Type : <td></label>
                        <select name=idtyp>
                            <option value="Adhar card">Adhar Card</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Pan Card">Pan Card</option>
                            <option value="Ration Card">Ration Card</option>
                        </select>
    <tr>
    <td>ID Number = <td><input type=text name=idno placeholder='Enter Your ID Number' required >
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
<form method=get action=db_insert.php>
<table border=1 width=37% >
    <tr>
    <th bgcolor=#000055><font color=white>Tenant Registration
    <tr>
    <td bgcolor=#aaaaaa>&nbsp;
    <tr>
    <td>
    <table border=0 align=center width=70%>
    <tr><td>&nbsp;
    <tr>
    <td>Name = <td><input type=text name=nm placeholder='Enter Your Name' pattern="[A-Za-z]{1,50}" required>
    <tr>
    <td>Password = <td><input type=password name=pass placeholder='Create Password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contains at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <tr>
    <td>Mobile = <td><input type=text name=mob placeholder='Enter Your Mobile No.' required pattern="[0-9]{10}">
    <tr>
    <td>E-Mail = <td><input type=email name=eml placeholder='Enter Your Email' >
    <tr>    
    <td><label for=idtyp>Choose ID Type : <td></label>
                        <select name=idtyp>
                            <option value="Adhar card">Adhar Card</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Pan Card">Pan Card</option>
                            <option value="Ration Card">Ration Card</option>
                        </select>
    <tr>
    <td>ID Number = <td><input type=text name=idno placeholder='Enter Your ID Number' required >
    <tr><td>&nbsp;
    <tr>
    <td align=center colspan=2><input type="submit" value="Register"> <input type="Reset" value="Clear">
    <tr><td>&nbsp;
</table>
</table>


<?php
}
?>