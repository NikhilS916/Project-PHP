<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sailingadventures");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_name = $_FILES["fileToUpload"]["name"];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<p class='up'>Sorry, file already exists.</p>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<p class='up'>Sorry, your file is too large.</p>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<p class='up'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
  $uploadOk = 0;
} else{
	// attempt insert query execution
$sql = "INSERT INTO images (name) VALUES ('$file_name')";
if(mysqli_query($link, $sql)){
    echo "<p class='up'>The record added successfully to your database table.</p>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p class='up'>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". $file_name. htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "<p class='up'>Sorry, there was an error uploading your file.</p>";
  }
}



 
// close connection
mysqli_close($link);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uploaded - Sailing Adventures</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
	<br>

	<a href="gallery.php">See the Gallery</a>
	
	<?php include("_includes/footer.php"); ?>
	
	</body>
</html>