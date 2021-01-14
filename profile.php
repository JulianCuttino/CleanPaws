<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
<?php include_once 'header.php';
include_once 'dbconnect.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM clients WHERE ClientID=$id");
$row = $result->fetch_array();
$first = $row['firstname'];
$last = $row['lastname'];
$address = $row['address'];
$email = $row['email'];
$phone = $row['phone'];
$notes = $row['notes'];
?>
<div class="wrapper">
<div>
<h1><?php echo"$first"; echo" "; echo"$last";?></h1>
<div>
<a href='editClient.php?u=$User'><button class='btn'>Edit Client</button></a>
<a href='newDog.php?u=$id'><button class='btn'>Add a Dog</button></a>
<a href='delete.php?u=$id'><button class='cancel'>Delete</button></a>
</div>
<br>
<h3> Address: <?php echo"$address";?> </h3>
<br>
<h3> Email: <?php echo"$email";?> </h3>
<br>
<h3> Phone Number: <?php echo"$phone";?> </h3>
<br>
<h3> Notes on Client: <?php echo"$notes";?> </h3>

</div>


</div>
    
</body>
</html>