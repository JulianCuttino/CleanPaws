<?php
session_start();
$ret = $_SESSION['row'];
if(!isset($ret['UserID'])){
	header('location:login.php');
	}
?>
<!DOCTYPE html>