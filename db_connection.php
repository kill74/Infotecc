<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infotec";       

try {
  // Create connection using PDO
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Set character set to UTF-8
  $conn->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
  // Handle connection errors
  die("Connection failed: " . $e->getMessage());
}

// Function to close the database connection
function closeConnection()
{
  global $conn;
  $conn = null;
}
?>
