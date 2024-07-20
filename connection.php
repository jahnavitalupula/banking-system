<?php
$servername = "localhost";
$username = "jahnavi_talupula";
$password = "janu@3004";
$dbname = "new_sparksbank";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed due to: " . $conn->connect_error);
}
?>