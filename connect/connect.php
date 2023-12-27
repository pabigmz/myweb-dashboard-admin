<?php error_reporting(error_reporting() & ~E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$database = "bigshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  // echo "Connected successfully";
?>