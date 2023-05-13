<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kona-Coffee</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php include("_includes/header.php"); ?>
	
	<?php include("_includes/nav.php"); ?>
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT coffeename, coffeeprice, coffeeroast FROM coffee";
$result = $conn->query($sql);

echo "<table>";
echo "<tr> <th> Product </th> <th>Price</th> <th>Roast</th> </tr>";

if ($result->num_rows > 0) { 
	
// output data of each row 
while($row = $result->fetch_assoc()) {    
echo "<tr> <td>" . $row["coffeename"]. "</td><td>" . $row["coffeeprice"]. " </td><td>" . $row["coffeeroast"]. "</td></tr>";
  }

} else { 
echo "0 results";
}

echo "</table>";
$conn->close();
?>
	
	<a href="add.php" id="add">Add to Products</a>

	<?php include("_includes/footer.php"); ?>
	
</body>
</html>