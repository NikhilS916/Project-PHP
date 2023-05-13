<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery - Sailing Adventures</title>
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

$sql = "SELECT name FROM images";
$result = $conn->query($sql);

echo "<div>";

if ($result->num_rows > 0) { 

// output data of each row 
while($row = $result->fetch_assoc()) {    
echo "<img class='galleryimg' src='uploads/" . $row["name"]. " '>" ;
  }

} else { 
echo "0 results";

}

echo "</div>";

$conn->close();
?>
<a href="uploadform.php" id="upimg">Add to Gallery</a>
	
	<br>
	<br>
		
	<?php include("_includes/footer.php"); ?>
</body>
</html>