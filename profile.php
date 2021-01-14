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
<h3> Address:</h3>
<p> <?php echo"$address";?></p>
<br>
<h3> Email:</h3>
<p> <?php echo"$email";?></p>
<br>
<h3> Phone Number:</h3>
<p><?php echo"$phone";?></p>
<br>
<h3> Notes on Client:</h3>
<p><?php echo"$notes";?></p>
<div>
<?php
$sql = "SELECT * FROM dogs WHERE ClientID = '$id'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while ($row = $result-> fetch_assoc()){
        $dogID=$row['DogID'];
        echo"<div><h1>".$row['name']."</h1> <div> <a href='editDog.php?u=$dogID'><button class='btn'>Edit</button></a></div>"
            ."<br><h3>Breed:</h3><p>".$row['breed']."</p>"
            ."<br><h3>Age:</h3><p>".$row['age']."</p>"
            ."<br><h3>Weight:</h3><p>".$row['weight']."</p>"
            ."<br><h3>Special Needs:</h3><p>".$row['specialNeeds']."</p>"
            ."<br><h3>Additional Comments:</h3><p>".$row['comments']."</p></div>";
          }
        }
?>
</div>

</div>


</div>
    
</body>
</html>