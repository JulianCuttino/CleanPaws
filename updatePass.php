<?php
include_once 'dbconnect.php';
$id = $_POST['id'];
$pass = $_POST['password'];
$hashed = password_hash($id, PASSWORD_DEFAULT);


?>
