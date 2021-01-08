<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Client Info</title>
</head>
<body>
<?php include_once'header.php';
include_once'dbconnect.php';
if(isset($_GET['u'])){
$id = $_GET['u'];
$result = $conn->query("SELECT * FROM clients WHERE ClientID=$id");
$row = $result->fetch_array();
$first = $row['firstname'];
$last = $row['lastname'];
$address = $row['address'];
$phone = $row['phone'];
$notes = $row['notes'];

$result2 = $conn->query("SELECT * FROM dogs WHERE ClientID=$id");
$row2 = $result2->fetch_array();
$name = $row2['name'];
$breed = $row2['breed'];
$age = $row2['age'];
$weight = $row2['weight'];
$special = $row2['specialNeeds'];
$comments = $row2['comments'];

}
?>
<div class="wrapper">
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<div id="addClient">
<div class="input-fields">
<h1>Client Information</h1>
 <hr>
	<label for="fname"><b>First name:</b></label>
	<input type="text" value="<?php echo $first;?>"id="fname" name="fname"><br><br>
	<label for="lname"><b>Last name:</b></label>
	<input type="text" value="<?php echo $last;?>" id="lname" name="lname"><br><br>
	
    <label for="address"><b>Address</b></label>
    <input type="text" value="<?php echo $address;?>" placeholder="Enter address" name="address" id="address" required>
 
    <label for="phone"><b>Phone Number </b></label>
    <input type="text" value="<?php echo $phone;?>" placeholder="Enter Phone number" name="phone" id="phone" required>
    
    <label for="notes"><b>Notes About Client</b></label>
    <input type="text" value="<?php echo $notes;?>" placeholder="Enter notes" name="notes" id="notes">
    </div>
    <div>
    <h1>Dog Information</h1>
    <hr>
    <label for="dog"><b>Name</b></label>
    <input type="text" value="<?php echo $name;?>" placeholder="Enter name" name="dname" id="dname" required>
    
    <label for="breed"><b>Breed</b></label>
    <input type="text" value="<?php echo $breed;?>" placeholder="Enter breed" name="breed" id="breed" required>
     
    <label for="age"><b>Age</b></label>
    <input type="text" value="<?php echo $age;?>" placeholder="Enter age" name="age" id="age" required>
     
    <label for="weight"><b>Weight</b></label>
    <input type="text" value="<?php echo $weight;?>" placeholder="Enter weight" name="weight" id="weight" required>
    
    <label for="special"><b>Special Needs</b></label>
    <input type="text" value="<?php echo $special;?>" placeholder="Enter needs" name="special" id="special">
     
    <label for="comments"><b>Additional Comments</b></label>
    <input type="text" value="<?php echo $comments;?>" placeholder="Enter comments" name="comments" id="comments">
    
    <button class="btn" type="submit">Update</button>
    <button class="cancel" onclick="location.href='home.php'">Cancel</button>
    </div>
    
</div>
</form>
</div>

</body>
</html>