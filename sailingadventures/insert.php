<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Records Added - Sailing Adventures</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
	<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sailingadventures");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
 
// attempt insert query execution
$sql = "INSERT INTO trips (name, destination, cost) VALUES ('$name', '$destination', '$cost')";
if(mysqli_query($link, $sql)){
    echo "<p>Records added successfully.</p>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
		<br>
		<br>
		<a href="trips.php" class="record">Go to Trips Page</a>
		<br>
		<br>
		<a href="welcome.php" class="record">Go back to Welcome Page</a>
		<br>
		<br>
	
	<?php include("_includes/footer.php"); ?>
	
</body>
</html>