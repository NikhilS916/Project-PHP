<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav.php"); ?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "kona");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$coffeename = mysqli_real_escape_string($link, $_REQUEST['coffeename']);
$coffeeprice = mysqli_real_escape_string($link, $_REQUEST['coffeeprice']);
$coffeeroast = mysqli_real_escape_string($link, $_REQUEST['coffeeroast']);

 
// attempt insert query execution
$sql = "INSERT INTO coffee (coffeename, coffeeprice, coffeeroast) VALUES ('$coffeename','$coffeeprice','$coffeeroast')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="coffee.php">Go to Products Page</a>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href="welcome.php">Go back to Welcome Page</a>
	</section>
	<?php include("_includes/footer.php"); ?>
</body>
</html>