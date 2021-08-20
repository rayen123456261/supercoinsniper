
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

$sql = "SELECT * FROM contact ";
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
		<td>Name</td>
		<td>Email</td>
		<td>Text</td>
		
	</tr>

	
		<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>
  	<tr>
   	 <td><?php echo $row['id'];?></td>
     <td><?php echo $row['Name'];?></td>
     <td><?php echo $row['Email'];?></td>
     <td><?php echo $row['Text'];?></td>
     
</tr>

 <?php
}
} $conn->close();
		?>
		</table>
				
		

</body>

</html>