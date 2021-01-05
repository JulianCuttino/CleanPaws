<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
<title>Untitled 1</title>
</head>

<body>
<div class="wrapper">
<form action="addclient.php" method="post">
<div id="addClient">
<div class="input-fields">
<h1>Client Information</h1>
 <hr>
	<label for="fname"><b>First name:</b></label>
	<input type="text" id="fname" name="fname"><br><br>
	<label for="lname"><b>Last name:</b></label>
	<input type="text" id="lname" name="lname"><br><br>
	
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required>
 
    <label for="phone"><b>Phone Number </b></label>
    <input type="text" placeholder="Enter Phone number" name="phone" id="phone" required>
    
    <label for="notes"><b>Notes About Client</b></label>
    <input type="text" placeholder="Enter notes" name="notes" id="notes">
    </div>
    <div>
    <h1>Dog Information</h1>
    <hr>
    <label for="dog"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="dname" id="dname" required>
    
    <label for="breed"><b>Breed</b></label>
    <input type="text" placeholder="Enter breed" name="breed" id="breed" required>
     
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter age" name="age" id="age" required>
     
    <label for="weight"><b>Weight</b></label>
    <input type="text" placeholder="Enter weight" name="weight" id="weight" required>
    
    <label for="special"><b>Special Needs</b></label>
    <input type="text" placeholder="Enter needs" name="special" id="special">
     
    <label for="comments"><b>Additional Comments</b></label>
    <input type="text" placeholder="Enter comments" name="comments" id="comments">
    
    <button type="submit">Submit</button>
    <button onclick="location.href='home.php'">Cancel</button>
    </div>
    
</div>
</form>
</div>

</body>

</html>
