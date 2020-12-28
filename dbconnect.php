<?php
//Connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "cleanpaws";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
?>