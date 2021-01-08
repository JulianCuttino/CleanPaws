<?php
//Updates specified client and or dog information
include_once 'dbconnect.php';
$id = $_POST['id'];
$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$address = $_POST['address'];
$phone = $_POST['phone'];
$notes = $_POST['notes'];

$sql = "UPDATE clients SET firstname='$firstName',lastname='$lastName',address='$address',phone='$phone',notes='$notes'WHERE ClientID=$id";
$conn->query($sql);


$name = $_POST['dname'];
$breed = $_POST['breed'];
$age =$_POST['age'];
$weight = $_POST['weight'];
$special = $_POST['special'];
$comments = $_POST['comments'];
$sql2 = "UPDATE dogs SET name='$name',breed='$breed',age='$age',weight='$weight',specialNeeds='$special',comments='$comments' WHERE ClientID=$id";
$conn->query($sql2);
$conn->close();
header('location:clients.php');
?>