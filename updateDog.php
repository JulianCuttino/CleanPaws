<?php
include_once 'dbconnect.php';
$id = $_POST['id'];
$name = $_POST['dname'];
$breed = $_POST['breed'];
$age =$_POST['age'];
$weight = $_POST['weight'];
$special = $_POST['special'];
$comments = $_POST['comments'];
$sql2 = "UPDATE dogs SET name='$name',breed='$breed',age='$age',weight='$weight',specialNeeds='$special',comments='$comments' WHERE DogID=$id";
$conn->query($sql2);
$conn->close();
header('location:clients.php');
?>