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
  <title>Contact Us</title>
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <?php
  $subject = $_POST["subject"];
  $message = $_POST["message"] . "  [" . $_SESSION["name"] . "]";
  mail("alexander.w.andersson@gmail.com", $subject, $message);
  ?>
  <h2>Your message has been sent to the administrator</h2>
  <a href="forum.php">Return to Forum</a>
</body>
</html>
