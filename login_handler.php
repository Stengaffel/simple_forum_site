<?php
session_start();
$host = "localhost"; // Use local host only
$username = "id4898536_theadmin";
$password = "korken3434";
$db_name = "id4898536_members";

$link = mysqli_connect($host, $username, $password, $db_name);

if(!$link) {
  echo "Connection Error!" . PHP_EOL;
  exit;
}

$strSQL = "SELECT * FROM people WHERE Username = '" . $_POST["username"] . "' AND Password = '" . $_POST["password"] . "'";

if($result=mysqli_query($link,$strSQL)) {
  $row=mysqli_fetch_row($result);
  if($row[3] == $_POST["username"] && $row[4] == $_POST["password"]) { // Place 3 and 4 in the array represents the username and password
    $_SESSION["loginMessage"] = "";
    $_SESSION["id"] = $row[0];
    $_SESSION["name"] = $row[1];
    $_SESSION["login"] = "YES";
    header("Location: forum.php");
  }
  else {
    $_SESSION["loginMessage"] = "Invalid username and/or password";
    header("Location: index.php");
  }
}
else{
  $_SESSION["loginMessage"] = "Connection Error!";
  header("Location: index.php");
}

mysqli_close($link);
?>
<!DOCTYPE html>

<html>
<head>
 <title>Login</title>
</head>
<body>

</body>
</html>
