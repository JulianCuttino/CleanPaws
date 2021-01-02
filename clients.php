<?php 
include_once 'isConnected.php';
include_once 'header.php';
?>
<html>
<body>

<h1>Clients</h1>
<div class="scrollable">
<table>
	<thead>
	<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone Number</th>
	<th>Notes</th>
	</tr>
	<?php
	include_once 'dbconnect.php';
	$sql = "SELECT firstname,lastname,address,phone,notes from clients";
	$result = $conn->query($sql);
	if ($result->num_rows>0){
				while ($row = $result-> fetch_assoc()){
          $User = $row['UserID'];
					echo"<tr><td>".$row['firstname']." ". $row['lastname']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['notes']."</td></tr>";
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
