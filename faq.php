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
  <title>FAQ</title>
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1>Frequently Asked Questions</h1>
    <div id="faqBlock">
      <ul>
        <li>
          <h3>Why is the adsöfjköakdjföakdf?</h3>
          <p>-Yes, good question. It's because södfjaeihtöpawe.</p>
        </li>
        <li>
          <h3>Why is the adsöfjköakdjföakdf?</h3>
          <p>-Yes, good question. It's because södfjaeihtöpawe.</p>
        </li>
        <li>
          <h3>Why is the adsöfjköakdjföakdf?</h3>
          <p>-Yes, good question. It's because södfjaeihtöpawe.</p>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>
