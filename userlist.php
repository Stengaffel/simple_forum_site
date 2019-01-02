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
  <title>List of Users</title>
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1>List of Users</h1>
    <div id="userBlock">
      <ul id="users">
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

        $strSQL = "SELECT * FROM people ORDER BY Username ASC";

        if($result=mysqli_query($link,$strSQL)) {
          while($row=mysqli_fetch_row($result)) {
            $verified = "";
            if($row[5] != null) {
              $verified = "Yes";
            }
            else {
              $verified = "No";
            }
            echo "<li><h2 class='userText'>" . $row[1] . ", <font color='#808080'>Verified: " . $verified . "</font></h2></li>";
          }

        }
        else {
          echo "<h2>Shiiiiiiiiet!</h2>";
        }
        ?>
      </ul>
    </div>
  </div>
</body>
