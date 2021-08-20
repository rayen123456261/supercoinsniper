<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercoinsniper";

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO contact (Email, Name, Text)
VALUES ('$name','$email','$text')";

if ($conn->query($sql) === TRUE) {
   header("Location: /supercoinsniper/front/contact.html");
}

$conn->close();
?>