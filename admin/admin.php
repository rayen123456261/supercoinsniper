<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercoinsniper";

$user = $_POST['user'];
$pass = $_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin where user = '$user' and password= '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "connected";
  }
} else {
  echo "failed";
}
$conn->close();

?>