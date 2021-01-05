<!DOCTYPE html>
<?php include_once 'isConnected.php';?>
<html>
<link href='Style/style.css' rel='stylesheet' type='text/css' media='all'>
<body>
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
    	<a href="logout.php"><button>Logout</button></a>
    </div>
</body>
</html>
