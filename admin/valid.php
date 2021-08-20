<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercoinsniper";



$id = $_POST['id'];
echo $id;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_POST['verif'] == 'valid') {
  $quantite = $_POST['quantite2'];
   $sql = "UPDATE sell SET Verifquantite='$quantite' WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/supercoinsniper/front/admin/sell.php');
} else {
  echo "Error updating record: " . $conn->error;
}
} 

  else if ($_POST['verif'] == 'not valid') {
      header('Location: http://localhost/supercoinsniper/front/admin/sell.php');

   //mail to resend data
   } 


   else if ($_POST['verif'] == 'start') {
   //mail to start
  }


    else if ($_POST['verif'] == 'change') {
      $quantite3 = $_POST['quantite3'];
      $sql = "UPDATE sell SET quantitefinale='$quantite3' WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/supercoinsniper/front/admin/sell.php');
} else {
  echo "Error updating record: " . $conn->error;
}
   //nebaath mail eli c bon kamalt 
   }




   else if ($_POST['verif'] == 'send') {
   //nebaath mail eli sayé fyh fatura w  waiting for payment! 
   }





   else if ($_POST['verif'] == 'paid') {
   //nebaath mail eli sayé khlos
   }





 else {
   echo "check error";
}
$conn->close();
?>