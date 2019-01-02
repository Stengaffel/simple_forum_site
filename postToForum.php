<?php
session_start();

if(! isset($_SESSION["login"]) ) {
  $_SESSION["loginMessage"] = "Logged out due to inactivity";
  header("Location: index.php");
}

$host = "localhost"; // Use local host only
$username = "id4898536_theadmin";
$password = "korken3434";
$db_name = "id4898536_members";

$link = mysqli_connect($host, $username, $password, $db_name);

if(!$link) {
  echo "Connection Error!" . PHP_EOL;
  exit;
}

$checkSQL = "SELECT * FROM people WHERE id = " . $_SESSION["id"];
if($result=mysqli_query($link,$checkSQL)) {
  if($row=mysqli_fetch_row($result)) {
    if($row[5] == null) {
      header("Location: forum.php");
      exit;
    }
  }
}

date_default_timezone_set("Europe/Stockholm");
$date = date('Y-m-d H:i:s');

$strSQL = "INSERT INTO ForumPosts(";

$strSQL = $strSQL . "DatePosted, ";
$strSQL = $strSQL . "PostText, ";
$strSQL = $strSQL . "UserID)";

$strSQL = $strSQL . "VALUES('";
$strSQL = $strSQL . $date . "', '";
$strSQL = $strSQL . $_POST["thepost"] . "', '";
$strSQL = $strSQL . $_SESSION["id"] . "')";

if(mysqli_query($link,$strSQL) or die(mysqli_error($link))) {
  $sqlMail = "SELECT * FROM people WHERE ForumUpdates = 1";
  if($retrieve=mysqli_query($link,$sqlMail)) {
    $msg = $_POST["thepost"] . "  [" . $_SESSION["name"] . "]";
    while($mailers=mysqli_fetch_row($retrieve)) {
      mail($mailers[2], "ForumUpdate", $msg);
    }
  }
  else {
    echo "Well, shit...";
  }
  header("Location: forum.php");
}
else {
  header("Location: index.php");
}

mysqli_close($link);
?>

<!DOCTYPE html>

<html>
<head>
 <title>Cakespade-Forum</title>
 <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>


  <br />

  <a href="index.php">Back to login-screen</a>
</body>
</html>
