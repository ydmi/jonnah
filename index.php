
<?php
$servername = "remotemysql.com";
$username = "hO92SgBK9V";
$password = "JOI1AX3gmo";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
