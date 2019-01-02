<?php
session_start();

if(! isset($_SESSION["login"]) ) {
  $_SESSION["loginmessage"] ="Logged out due to inactivity";
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1>My Account</h1>
    <div id="emailSquare">
      <h2>Emailupdates</h2>
      <form action="emailDis.php" method="post">
        <p><label for="emailBool">Remove emailupdates
      </form>
    </div>
    <div id="removeSquare" method="post">
      <h2>Delete your account</h2>
      <form action="accRemove.php" method="post">
        <p><label for="delPass">Enter password to delete account</label>
        <input type="password" id="delPass1" name="delPass" placeholder="Enter password">
        <br />
        <input type="password" id="delPass2" name="delPass2" placeholder="Enter password again"></p>
      </form>
    </div>
  </div>
</body>
</html>
