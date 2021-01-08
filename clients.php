<?php 
include_once 'isConnected.php';
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clients</title>
</head>
<body>
<h1>Clients</h1>
<div>
<button class="btn" onclick="location.href='Newclient.php';">Add New Client</button>
</div>

<div class="scrollable">
<table>
	<thead>
	<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone Number</th>
	<th>Notes</th>
	<th>Dog</th>
	</tr>
	<?php
	include_once 'dbconnect.php';
	$sql = "SELECT ClientID,firstname,lastname,address,phone,notes from clients";
	$result = $conn->query($sql);
	if ($result->num_rows>0){
				while ($row = $result-> fetch_assoc()){
				  $User = $row['ClientID'];
					echo"<tr><td>".$row['firstname']." ". $row['lastname']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['notes']."</td><td><a href='dog.php?u=$User'>dog</a></td></tr>";
					}
				echo "</table>";
				}
			else{
				echo "No results";
				}
			$conn->close();
			
	?>
</table>
</div>
</body>
</html>
