<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercoinsniper";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sell ";
$result = $conn->query($sql);



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sell.css">
	<meta charset="utf-8">
	<title>sell to us</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

	<table border="1">
	<tr>
		<td>id</td>
		<td>Console</td>
		<td>Name</td>
		<td>Lastname</td>
		<td>Email</td>
		<td>Contact</td>
		<td>Quantite</td>
		<td>AccountMail</td>
		<td>AccountPass</td>
		<td>Backupcode</td>
		<td>Payment</td>
		<td>Detailpayment</td>
		<td>verified / Quantite 2</td>
		<td>en cours</td>
		<td>Quantite 3</td>
		<td>Quantite finale</td>
		<td>payment</td>
	</tr>

	
		<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>
<form method="post" action="valid.php">
  	<tr>
   	 <td><input type="hidden" value="<?php echo $row['id'];?>" name="id"><?php echo $row['id'];?></td>
     <td><?php echo $row['Console'];?></td>
     <td><?php echo $row['Name'];?></td>
     <td><?php echo $row['Lastname'];?></td>
     <td><?php echo $row['Email'];?></td>
     <td><?php echo $row['Contact'];?></td>
     <td><?php echo $row['Quantite'];?></td>
     <td><?php echo $row['AccountMail'];?></td>
     <td><?php echo $row['AccountPass'];?></td>
     <td><?php echo $row['Backupcode'];?></td>
     <td><?php echo $row['Payment'];?></td>
     <td><?php echo $row['Detailpayment'];?></td>
 

		
			<td>
				<input type="text" name="quantite2" value="<?php echo $row['Verifquantite'];?>" id="i1">
				<input type="file" name="file">
				<input type="submit" name="verif" value="valid">
				<input type="submit" name="verif" value="not valid" id="input1">
			</td>
		







	<td><input type="submit" name="verif" value="start" id="start"></td>





	<td>
		<input type="text" name="quantite3" value="<?php echo $row['quantitefinale'];?>" id="i2">
		<input type="file" name="aaaa">
		<input type="submit" name="verif" value="change" id="change">
	</td>





	<?php
	$rayen = $row['Verifquantite']-$row['quantitefinale'];
	?>
	<td>
		<input type="text" name="quantitefinale" value="<?php echo $rayen;?>" disabled>
		<input type="submit" name="verif" value="send" id="send">
	</td>
	<td>
		<input type="file" name="aaaaaaaaaaaa">
		<input type="submit" name="verif" value="paid" id="paid">
	</td>
	</form>
</tr>

 <?php
}
} $conn->close();
		?>
		</table>
				
		

</body>

</html>