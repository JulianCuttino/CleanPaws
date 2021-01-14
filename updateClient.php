<?php
//Updates specified client and or dog information
include_once 'dbconnect.php';
$id = $_POST['id'];
$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$notes = $_POST['notes'];

$sql = "UPDATE clients SET firstname='$firstName',lastname='$lastName',address='$address', email='$email' phone='$phone',notes='$notes'WHERE ClientID=$id";
$conn->query($sql);
$conn->close();
header('location:clients.php');
?>