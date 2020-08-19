<?php
$servername = "127.0.0.1";
$username = "root";
$password = "9172988869";
$dbName = "hack";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





?>
