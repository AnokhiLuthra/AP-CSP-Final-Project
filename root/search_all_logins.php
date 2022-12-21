<?php

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
	echo "failed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 }
echo $mysqli->host_info . "<br>";
     
$sql = "SELECT Username, Password  FROM user_data";
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