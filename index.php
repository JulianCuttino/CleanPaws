<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
    <title>Login</title>
</head>
<body>
<h2 class="center">Login</h2>
<div class="wrapper">

<form method='post' action='login.php'>
<div>
    <img src='images\logo.png'>
</div>

<div class="sign-in">
<div class="input-fields">
    <label for ='username'><b>Username</b></label>
    <input type = 'text' class="input"placeholder='Enter username' name='username' required>

    <label for='password'><b>Password</b></label>
    <input type='password'class="input" placeholder='Enter password' name='password' required>
    <button class="btn" type='submit'>Login</button>
</div>
    
 </div>
 </form>
</div>
</body>
</html>