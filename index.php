<?php
$servername = "terraform-20220905111348513400000001.ckc51skzjcy0.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "password";

echo "<h1> from: $getenv('HOSTNAME')  </h1>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
