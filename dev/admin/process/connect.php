<?php
$servername = getenv("SRMIIC_RDS_SERVER");
$username = getenv("SRMIIC_RDS_USER");
$password = getenv("SRMIIC_RDS_PASSWORD");
$database = "siic";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
