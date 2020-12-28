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
    if ($result->num_rows === 1) {
        session_start();
        $row = $result->fetch_assoc();
       unset($_SESSION['row']);
       
       if (!isset($_SESSION['row'])) {
        $_SESSION['row'] = $row;
        header('location:home.php');
       }
       } else {
           echo"
           <script> alert('Incorrect email or password. Try again');
           </script>";
        }
       $conn->close();

    
    }

?>
