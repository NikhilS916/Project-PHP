<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Trips - Sailing Adventures</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sailingadventures";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, destination, cost FROM trips";
$result = $conn->query($sql);

echo "<table>";
echo "<tr> <th> Name </th> <th>Destination</th> <th>Cost</th> </tr>";

if ($result->num_rows > 0) { 

// output data of each row 
while($row = $result->fetch_assoc()) {    
echo "<tr> <td>" . $row["name"]. "</td><td>" . $row["destination"]. " </td><td>" . $row["cost"]. "</td></tr>";
  }

} else { 
echo "0 results";

}

echo "</table>";

$conn->close();
?>
<a href="add.php" id="add">Add Trips</a>
	<br>
	<br>
	<?php include("_includes/footer.php"); ?>
</body>
</html>