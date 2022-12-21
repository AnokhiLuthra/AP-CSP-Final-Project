<?php

include "db_connect.php";
$new_username = $_GET["newusername"];
$new_password = $_GET["newpassword"];

//$new_username = addslashes["newusername"];
//$new_password = addslashes["newpassword"];


//Search the database for sravya
echo "<h2>Want to join?:  $new_username and $new_password</h2>";

$sql = "INSERT INTO user_data (Username, Password) VALUES ('$new_username', '$new_password' )";
$result = $mysqli->query($sql);

include "search_all_logins.php";
?>

<a href="index.php">Return to main page</a>;