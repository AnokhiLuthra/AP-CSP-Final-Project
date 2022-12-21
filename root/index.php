
<html>
<head>
 
</head>
 
<body>
<h1>Login</h1> 

<?php

// include "db_connect.php";


//include "search_all_logins.php";
?>


<form action="search_keyword.php">
  Please enter a username:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form>

<form action="search_password.php">
  Please enter your password:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form>

<hr/>

<form action="add_login.php">
  Please enter a new username:<br>
  <input type="text" name="newusername"><br>
  
  Please enter a new password:<br>
  <input type="text" name="newpassword"><br>
  <input type="submit" value="Submit">
</form>

<?php

//include "search_keyword.php";


$mysqli->close();
 

?>
 
</body>
