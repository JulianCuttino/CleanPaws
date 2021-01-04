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
echo($dog['name']);
?>
</div>
    
</body>
</html>