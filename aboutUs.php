<?php
session_start();

if(! isset($_SESSION["login"]) ) {
  $_SESSION["loginmessage"] = "Logged out due to inactivity";
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html>
<head>
  <title>About us</title>
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="theStyle.css" type=text/css>
</head>
<body>
  <div class="content">
    <h1>About Us</h1>
  </div>
</body>
</html>
