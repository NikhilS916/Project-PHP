<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">	
</head>
<body>
	
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
	<br>
	<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <p class="up">Select image to upload :</p>
	<br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
	
	<br>
	<br>
	
	<?php include("_includes/footer.php"); ?>

</body>
</html>