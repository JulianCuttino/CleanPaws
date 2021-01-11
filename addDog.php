<?php
include_once 'dbconnect.php';
$id = $_POST['id'];
$name = $_POST['dname'];
$breed = $_POST['breed'];
$age =$_POST['age'];
$weight = $_POST['weight'];
$special = $_POST['special'];
$comments = $_POST['comments'];
$sql2 = "INSERT INTO dogs (ClientID,name,breed,age,weight,specialNeeds,comments) VALUES ('$id','$name','$breed','$age','$weight','$special','$comments')";
$conn->query($sql2);
$conn->close();
header('location:clients.php');




?>