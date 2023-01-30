<?php
session_start();
if(isset($_SESSION["onrid"]))
{
$onrid=$_SESSION["onrid"];
$name=$_SESSION["name"];
if(strcmp($onrid,"")==0)
{
    echo "<center>Kripya login krke aye";
}   
else
{
    ?>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Home Page</title>
      <link rel="stylesheet" href="login1_style.css">
    </head>
    <body>
      <div class="center">
        <center>
        <p>&nbsp;
        <h2>WELCOME <?php echo $name; ?></h2>
        <p>&nbsp;
        <p>&nbsp;
  
            <medium><b>UserID : <?php echo $onrid; ?> </b></medium>
          <div class="signup_link">
              <b><a href="tenant_summary1.php">Tenant Sheet</a>
          </div>
          <div class="signup_link">
              <a href="owner_summary.php">Owner Summary</a>
          </div>
          <div class="signup_link">
              <a href="apartment3.php">Rooms</a>
          </div>
          <div class="signup_link">
              <a href="logout.php">Signout</a></b>
          </div>
        <center>
        <!-- <p><b>&copy; OMI - 2022</b> -->
        <p>&nbsp;
      </div>
    </body>
  </html>
  <?php
}
}
?>




