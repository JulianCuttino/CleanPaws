<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog</title>
</head>
<body>
<div>
<?php include_once 'header.php';
if(isset($_GET["u"])){
	$u = (int)$_GET["u"];
} else {
    header("location: home.php");
    exit();	
}
?>
</div>
<div>
<?php
include_once 'dbconnect.php';
$sql = "SELECT * FROM dogs WHERE ClientID = '$u'";
$result = $conn->query($sql);
$dog = $result-> fetch_assoc();
$name = $dog['name'];
$breed = $dog['breed'];
$weight = $dog['weight'];
$age = $dog['age'];
$special = $dog['specialNeeds'];
$comments = $dog['comments'];
?>
<h1><?php echo($name);?> </h1>
<div>
    <table>
    <thead>
    <tr>
    <th>Breed</th>
    <th>Age</th>
    <th>Weight</th>
    <th>Special Needs</th>
    <th>Comments</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><?php echo($breed);?></td>
    <td><?php echo($age);?></td>
    <td><?php echo($weight);?></td>
    <td><?php echo($special);?></td>
    <td><?php echo($comments);?></td>
    </tr>
    
    </tbody>
    
    </table>


</div>
</div>
    
</body>
</html>