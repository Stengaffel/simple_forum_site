<!DOCTYPE html>

<html>
<head>
 <title>Create Account</title>
 <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.ico" type="image/x-icon"/>
 <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <?php
  $host = "localhost"; // Use local host only
  $username = "id4898536_theadmin";
  $password = "korken3434";
  $db_name = "id4898536_members";

  $link = mysqli_connect($host, $username, $password, $db_name);

  if(!$link) {
    echo "Connection Error!" . PHP_EOL;
    exit;
  }

  $strSQL = "INSERT INTO people(";

  $strSQL = $strSQL . "Name, ";
  $strSQL = $strSQL . "Email, ";
  $strSQL = $strSQL . "Username, ";
  $strSQL = $strSQL . "Password, ";
  $strSQL = $strSQL . "ForumUpdates)";

  $strSQL = $strSQL . "VALUES('";
  $strSQL = $strSQL . $_POST["name"] . "', '";
  $strSQL = $strSQL . $_POST["email"] . "', '";
  $strSQL = $strSQL . $_POST["username"] . "', '";
  $strSQL = $strSQL . $_POST["password"] . "', '";
  $strSQL = $strSQL . $_POST["updates"] . "')";

  if(mysqli_query($link,$strSQL) or die(mysqli_error($link))) {
    echo "<p>Your account has been successfully created!</p>";
  }
  else {
    echo "<p>Your account could not be created due to an unexpected error</p>";
  }

  $msg = $_POST["name"] . " with email: " . $_POST["email"] . " has registered!";
  mail("alexander.w.andersson@gmail.com", "New Registration", $msg);

  mysqli_close($link);
  ?>

  <br />

  <a href="index.php">Back to login-screen</a>
</body>
</html>
