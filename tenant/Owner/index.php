
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Owner Login</title>
    <link rel="stylesheet" href="login1_style.css">
  </head>
  <body>
    <div class="center">
      <h1>Owner Login</h1>
      <form method="get" action="login2.php">
        <div class="txt_field">
          <input type="text" name="onrid" title="apna user ID to daalo ">
          <span></span>
          <label>UserID</label>
        </div>
        <div class="txt_field">
          <input type="password" name="onpass" title="iske bina ander kaise jaoge">
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="owner_reg.php"><b>Signup</a>
          <br>
          <a href="../Tenant/login1.php">Tenant Login</a></b>
        </div>
     
        
        <?php
        if(isset($_GET["abc"]))
        {
        $s=$_GET["abc"];
        
        echo "<center>";
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
