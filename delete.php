<?php
//Removes Client and dog info from database
include_once'dbconnect.php';
if (isset($_GET['u'])){
$id = $_GET['u'];
$conn->query("DELETE FROM clients WHERE ClientID=$id") or die($conn->error());
$conn->query("DELETE FROM dogs WHERE ClientID=$id") or die($conn->error());
header('location:clients.php');
}
?>
