<?php
include_once 'dbconnect.php';
$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$address = $_POST['address'];
$phone = $_POST['phone'];
$notes = $_POST['notes'];

$sql = "INSERT INTO clients (firstname,lastname,address,phone,notes) VALUES('$firstName','$lastName','$address','$phone','$notes')";
$conn->query($sql);



$sql2 = "SELECT clientID, firstname, lastname from clients WHERE firstname='$firstName' and lastname='$lastName'";
$result = $conn->query($sql2);
$row = $result->fetch_assoc();
$client = $row['clientID'];
$name = $_POST['dname'];
$breed = $_POST['breed'];
$age =$_POST['age'];
$weight = $_POST['weight'];
$special = $_POST['special'];
$comments = $_POST['comments'];
$sql_dog = "INSERT INTO dogs (ClientID,name,breed,age,weight,specialNeeds,comments) VALUES ('$client','$name','$breed','$age','$weight','$special','$comments')";
$conn->query($sql_dog);
$conn->close();
echo($client);



?>