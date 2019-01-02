<?php session_start();
if(! isset($_SESSION["loginMessage"])) {
    $_SESSION["loginMessage"] = "";
}
else if(isset($_SESSION["login"])) {
  session_destroy();
}
?>
<!DOCTYPE html>

<html>
<head>
 <title>Login</title>
 <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
 <script type="text/javascript" src="loginVer.js"></script>
 <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1 class="header1">The Cakespade-Forum</h1>
    <div class="contentRectangle">
      <form id="login_form" method="post" action="login_handler.php">
        <h2 id="login_h2">Login</h2>
        <input type="text" id=username name="username" placeholder="Username" /><br />
        <input type="password" id=password name="password" placeholder="Password" /><br />
        <input type="submit" value="Login"/>
      </form>
      <br />
      <?php
      if($_SESSION["loginMessage"] != null) {
        echo "<p><font color='red'>" . $_SESSION["loginMessage"] . "</font></p>";
      }
      ?>
      <a href="createAccount.php">Don't have an account? Create an account here</a>
    </div>
</body>
</html>
