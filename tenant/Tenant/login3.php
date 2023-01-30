<?php
session_start();
extract($_GET);

if(isset($_SESSION["usrid"]))
{
$usrid=$_SESSION["usrid"];
$nm=$_SESSION["nm"];
$aprtmnt=$_SESSION['aprtmnt'];
if(strcmp($usrid, "")==0)
{
    echo "<center>Kripya login krke aye";
}
else
{

  include_once("db_con.inc");
  $rs=mysqli_query($conn, "select * from reg where user_id='$usrid'");
while($rw=mysqli_fetch_array($rs))
{
  $nm=$rw['tenant_name'];
  $aprtmnt=$rw['room_id'];

}


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
        <h2>WELCOME <?php echo $nm; ?></h2>
        <p>&nbsp;
        <p>&nbsp;
  
            <b><label>UserID : <?php echo $usrid; ?> </label>
            <br>
            <label>Room ID : <?php echo $aprtmnt; ?> </label>
  
          <div class="signup_link">
              <a href="tenant_report.php?usrid=<?php echo $usrid; ?>">View Report</a>
          </div>
          <div class="signup_link">
              <a href="apartment3.php?usrid=<?php echo $usrid; ?>">Apartments</a>
          </div>
          <div class="signup_link">
              <a href="logout.php">Signout</a></b>
          </div>
        <center>
        <!-- <p>&copy; OMI - 2022 -->
      </div>
    </body>
  </html>
  <?php
}
}
?>





