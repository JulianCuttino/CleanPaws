<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once 'header.php';
if(isset($_GET['u'])){
    $id = $_GET['u'];
}
?>
    <div id="wrapper">
    <form action="addDog.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <div id="addClient">
    <div class="input-fields">
    <h1>Dog Information</h1>
    <hr>
    <label for="dog"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="dname" id="dname" required>
    
    <label for="breed"><b>Breed</b></label>
    <input type="text" placeholder="Enter breed" name="breed" id="breed" required>
     
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter age" name="age" id="age" required>
     
    <label for="weight"><b>Weight</b></label>
    <input type="text" placeholder="Enter weight" name="weight" id="weight" required>
    
    <label for="special"><b>Special Needs</b></label>
    <input type="text" placeholder="Enter needs" name="special" id="special">
     
    <label for="comments"><b>Additional Comments</b></label>
    <input type="text" placeholder="Enter comments" name="comments" id="comments">
    
    <button class="btn" type="submit">Submit</button>
    <button class="cancel" onclick="location.href='index.php'">Cancel</button>
    </div>
    </div>
    </form>
    </div>
</body>
</html>