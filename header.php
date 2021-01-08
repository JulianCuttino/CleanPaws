<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
    <title>Document</title>
</head>
<body>
<?php include_once 'isConnected.php';?>
<div id="header">
    <h2>Clean Paws and All</h2>
    <nav>
    <ul>
        <li><a href='home.php'>Home</a></li>
        <li><a href='clients.php'>Clients</a></li>
        <li><a href='finances.php'>Finance</a></li>
     	<li><?php echo $ret['Name'];?></li>
    </ul>
    </nav>
    	<a href="logout.php"><button class="btn">Logout</button></a>
    </div>
</body>
</html>
