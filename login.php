<?php
include_once 'dbconnect.php';
    if (isset($_POST['username'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $sql = "SELECT * FROM admins WHERE Name = '$user' and Password = '$pass'";
    $result = $conn->query($sql);
    
    }

?>
<!DOCTYPE html>
<html>
<h2>Login</h2>
<form method='post' action='login.php'>
<div class='imgcontainer'>
    <img src='images\logo.png'>
</div>

<div class ='container'>
    <label for ='username'><b>Username</b></label>
    <input type = 'text' placeholder='Enter username' name='username' required>

    <label for='password'><b>Password</b></label>
    <input type='password' placeholder='Enter password' name='password' required>

    <button type='submit'>Login</button>
            
</html>