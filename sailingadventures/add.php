<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Trips Form - Sailing Adventures</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
		<form id="frm" action="insert.php" method="post">
			<p>
    			<label for="name">Name :</label>
				<br>
				<br>
        		<input type="text" name="name" id="name">
			</p>
			
			<p>
				<label for="destination">Destination :</label>
				<br>
				<br>
				<input type="text" name="destination" id="destination">
			</p>
			
			<p>
				<label for="cost">Cost :</label>
				<br>
				<br>
				<input type="text" name="cost" id="cost">
			</p>
			
			<input type="submit" id="tripbtn" value="Add Trip">
			
		</form>
	
	<?php include("_includes/footer.php"); ?>
</body>
</html>