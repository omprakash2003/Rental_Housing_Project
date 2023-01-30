<center>
<center>
<p>&nbsp;
<p>&nbsp;
<p>&nbsp;
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tenant Login</title>
    <link rel="stylesheet" href="login1_style.css">
  </head>
  <body>
    <div class="center">
      <h1>Tenant Login</h1>
      <form method="get" action="login2.php">
        <div class="txt_field">
          <input type="text" name="usrid" required>
          <span></span>
          <label>UserID</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <b><a href="tenant_reg.php">Signup</a>
          <br>
          <a href="../Owner/login1.php">Owner Login</a></b>
        </div>    

        <?php
if(isset($_GET["abc"]))
{
$s=$_GET["abc"];
if(strcmp($s, "")!=0)
{
    if(strcmp($s, "inv")==0)
    {
       echo"<font color=red>Invalid Login Info.. !!</font>";
       
    }
    if(strcmp($s, "bahar")==0)
    {
        echo"<font color=blue>Thank You</font>";
    }
    if(strcmp($s, "reg")==0)
    {
        echo"<font color=blue>Now Login</font>";
    }
}
}
?>

      </form>
      <center>
      <p>&nbsp;
      <!-- <p><b>&copy; OMI - 2022</b> -->
        <p>&nbsp;
    </div>
  </body>
</html>






