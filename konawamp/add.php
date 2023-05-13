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
	
<form action="insert.php" method="post" class="add">
	<p>
    	<label for="coffeename">Coffee Name :</label>
		<br>
		<br>
        <input type="text" name="coffeename" id="coffeename">
    </p>
		<p>
    	<label for="coffeeprice">Price :</label>
		<br>
		<br>
        <input type="text" name="coffeeprice" id="coffeeprice">
    </p>
    <p>
    	<label for="coffeeroast">Roast :</label>
		<br>
		<br>
        <input type="text" name="coffeeroast" id="coffeeroast">
    </p>
    <input type="submit" value="Add Records">
</form>
	
	<?php include("_includes/footer.php"); ?>
	
</body>
</html>