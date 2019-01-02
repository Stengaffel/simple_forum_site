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
  <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon">
  <script type="text/javascript" src="messageVer.js"></script>
  <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1>Contact Us</h1>
    <div id="contactBlock">
      <h2>Fill in the fields below to send a message to the administrator</h2>
      <form id="contact_form" method="post" action="message_handler.php">
        <p><label for="txtSubject">Subject:</label><br />
        <input type="text" id="txtSubject" name="subject" placeholder="Subject (MAX 30 characters)"></p>

        <p><label for="txtMessage">Message:</label><br />
        <textarea id="txtMessage" name="message" form="contact_form" placeholder="Write your message here(MAX 1000 characters)"></textarea></p>

        <input id="sendButton" type="submit" value="Send">
      </form>
    </div>
  </div>
</body>
