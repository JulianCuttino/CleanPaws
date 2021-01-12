<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
    <title>Change Password</title>
</head>
<body>
<h2 class="center">Change Password</h2>
<div class="wrapper">
<?php
include_once 'dbconnect.php';
if (isset($_GET['u'])){
$id = $_GET['u'];
}
?>

<form method='post' action='updatePass.php'>
<div>
    <img src='images\logo.png'>
</div>
<input type="hidden" name="id" value="<?php echo $id;?>">
<div class="sign-in">
<div class="input-fields">
    <label for ='username'><b>New Password</b></label>
    <input type = 'password' class="input"placeholder='New Password' name='newpass' required>

    <label for='password'><b>Confirm Password</b></label>
    <input type='password'class="input" placeholder='Confirm New Password' name='password' required>
    <div>
    <button class="btn" type='submit'>Update</button>
    <button class="cancel" onclick="location.href='index.php'">Cancel</button>
    </div>
    

</div>
    
 </div>
 </form>
</div>

</body>
</html>