<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

//Search the database for sravya
echo "<h2> Show all Logins with the name $keywordfromform </h2>";

$sql = "SELECT Username, Password  FROM user_data Where Username LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);
 

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	 echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]. "<br>";
   }
 
} else {
    echo "0 results";
}

?>