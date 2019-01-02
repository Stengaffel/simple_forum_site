<?php
session_start();

if(! isset($_SESSION["login"]) ) {
  $_SESSION["loginMessage"] = "Logged out due to inactivity";
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html>
<head>
 <title>Cakespade-Forum</title>
 <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
 <script type="text/javascript" src="jsPostVer.js"></script>
 <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <a id="logout" href="index.php">Log out</a>
    <h1>Welcome to The Cakespade-Forum</h1>
    <?php
    echo "<h1>" . "<font color=#ff3300>" . $_SESSION["name"] . "</font>" . "</h1>";
    ?>
    <form action="postToForum.php" id="usrform" method="post">
      <div id="forumField">
        <textarea id="postInput" name="thepost" form="usrform" placeholder="Write your post here (MAX 400 characters)"></textarea>
        <input id="sbutton" type="submit" value="Post">
      </div>
    </form>

    <div class="menuBar">
      <a href="userlist.php">List of Users</a>
      <a href="aboutUs.php">About Us</a>
      <a href="contactUs.php">Contact Us</a>
      <a href="faq.php">FAQ</a>
      <a href="myAccount.php">My Account</a>
    </div>

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

    $strSQL = "SELECT * FROM ForumPosts";

    $ids = array();
    $dates = array();
    $texts = array();
    $userIds = array();

    if($result=mysqli_query($link,$strSQL)) {
      while($row=mysqli_fetch_row($result)) {
        array_unshift($ids, $row[0]);
        array_unshift($dates, $row[1]);
        array_unshift($texts, $row[2]);
        array_unshift($userIds, $row[3]);
      }
    }
    else {
      echo "<h2>Shit's broke, yo!</h2>";
    }

    for($i = 0; $i < count($ids); $i++) {
      $theName = "";

      $userSQL = "SELECT * FROM people WHERE id = " . $userIds[$i];
      if($result=mysqli_query($link,$userSQL)) {
        $row = mysqli_fetch_row($result);
        $theName = $row[1];
      }
      if( strlen($theName) <= 0) {
        $theName = "[deleted]";
      }
      echo "<div class='posts'>";
      echo "<div class='postinfo'>";
      echo "<p class='postnum'>#" . $ids[$i] . "</p>";
      echo "<p class='postnames'>" . $theName . "</p>";
      echo "<p class='dates'>" . $dates[$i] . "</p></div>";
      echo "<div class='limit'><p class='posttexts'>" . $texts[$i] . "</p></div>";
      echo "</div>";
    }

    mysqli_close($link);
    ?>
  </div>
</body>
</html>
