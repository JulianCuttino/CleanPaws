<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog</title>
</head>
<body>
<div>
<?php include_once 'header.php';
if(isset($_GET["u"])){
	$u = (int)$_GET["u"];
} else {
    header("location: index.php");
    exit();	
}
?>
</div>
<div>
<h1>Dogs</h1>
</div>
<div>
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Weight</th>
    <th>Special Needs</th>
    <th>Comments</th>
    </tr>
    </thead>

    <?php
    include_once 'dbconnect.php';
    $sql = "SELECT * FROM dogs WHERE ClientID = '$u'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while ($row = $result-> fetch_assoc()){
            $User = $row['DogID'];
            echo"<tr><td>".$row['name']."</td><td> ". $row['breed']."</td><td>"
            .$row['age']."</td><td>".$row['weight']."</td><td>".$row['specialNeeds'].
            "</td><td>".$row['comments']."</td>
            <td><a href='editDog.php?u=$User'><button class='btn'>Edit</button></a></td>".
            "</tr>";
              }
          echo "</table>";
          }
      else{
          echo "No results";
          }
      $conn->close();


?>
    
    </table>


</div>
    
</body>
</html>