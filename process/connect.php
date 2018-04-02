<?php
$servername = "localhost";
$username = "root";
$password = "nomnom99";
$database = "siic";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
