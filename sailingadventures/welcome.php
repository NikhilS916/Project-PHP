<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Sailing Adventures</title>
  	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
    <div class="page-header">
        <h1 id="wel">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="add.php" class="welcome">Add to Trips</a>
        <a href="uploadform.php"class="welcome">Add to Gallery</a>
    </p>
	
	<?php include("_includes/footer.php"); ?>
</body>
</html>