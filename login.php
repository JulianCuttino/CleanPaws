<?php
include_once 'dbconnect.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM admins WHERE Name = '$user' and Password = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows === 1) {
        session_start();
        $row = $result->fetch_assoc();
       unset($_SESSION['row']);
       
       if (!isset($_SESSION['row'])) {
        $_SESSION['row'] = $row;
        header('location:index.php');
       }
       } else {
           echo"
           <script> alert('Incorrect email or password. Try again');
           </script>";
        }
       $conn->close();

?>
<!DOCTYPE html>
<html>
<h2>Login</h2>
<form method='post' action='#'>
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