<!DOCTYPE html>

<html>
<head>
 <title>Create Account</title>
 <link rel="shortcut icon" href="https://cakespade.000webhostapp.com/favicon.png" type="image/x-icon"/>
 <script type="text/javascript" src="createAccountVer.js"></script>
 <link rel="stylesheet" href="theStyle.css" type="text/css">
</head>
<body>
  <div class="content">
    <h1 class="header1">Create Account:</h1>
    <div id="create_form">
      <form id="account_form" action="addUser.php" method="post">
        <p><label for="txtName">Name: (Name seen by other users)</label>
        <input type="text" id="txtName" name="name" placeholder="Name"/></p>

        <p><label for="txtEmail">Email:</label>
        <input type="text" id="txtEmail" name="email" placeholder="Email-Address" /></p>

        <p><label for="txtUserName">Username:</label>
        <input type="text" id="txtUsername" name="username" placeholder="Username"/></p>

        <p><label for="txtPassword">Password:</label>
        <input type="password" id="txtPassword" name="password" placeholder="Password"/></p>

        <p><label for="txtPassword2">Enter password again:</label>
        <input type="password" id="txtPassword2" name="password2" placeholder="Password"/></p>

        <p><label for="boolUpdate">Get email-updates from the forum</label>
        <input type="hidden" id="boolUpdate" name="updates" value='0'/>
        <input type="checkbox" id="boolUpdate" name="updates" value='1'/></p>

        <input type="submit" value="Create Account"/>
      </form>
    </div>
  </div>
</body>
</html>
