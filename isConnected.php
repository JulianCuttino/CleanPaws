<?php
session_start();
$ret = $_SESSION['row'];
if(!isset($ret['ID'])){
	header('location:login.php');
	}
?>