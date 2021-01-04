<!DOCTYPE html>
<?php include_once 'isConnected.php';?>
<html>
<link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
<body id="header">
    <nav id="menu">
    <h2>Clean Paws and All</h2>
    <ul>
        <li><a href='home.php'>Home</a></li>
        <li><a href='clients.php'>Clients</a></li>
        <li><a href='finances.php'>Finance</a></li>
        <li><a href='logout.php'>Logout</a></li>
        <li><?php echo $ret['Name'];?></li>
    </ul>
    </nav>
</body>
</html>
