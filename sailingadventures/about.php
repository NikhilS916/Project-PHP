<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Sailing Adventures</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php include("_includes/header.php"); ?>
	<?php include("_includes/nav2.php"); ?>
	
	<div class="container-fluid">
	  <ul id="clothingnav1" class="nav nav-tabs" role="tablist">
	    <li class="nav-item"> <a class="nav-link active" href="#home1" id="hometab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Small groups</a> </li>
	    <li class="nav-item"> <a class="nav-link" href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Book & Travel with Confidence</a> </li>
		<li class="nav-item"> <a class="nav-link" href="#paneThree1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Locally based guides</a> </li>
		<li class="nav-item"> <a class="nav-link" href="#paneFour1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Built to support local communities</a> </li>
		<li class="nav-item"> <a class="nav-link" href="#paneFive1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Flexibility, freedom, fun</a> </li>  
	    
      </ul>
		<br>
		<br>
	  <!-- Content Panel -->
	  <div id="clothingnavcontent1" class="tab-content">
	    <div role="tabpanel" class="tab-pane fade show active" id="home1" aria-labelledby="hometab1">
	      <p>Join a small group of like-minded travellers that, like you, are eager to safely and confidently experience all the things that make our world worth exploring.</p>
	    <img src="images/about/smallgroups.jpg" class="img-fluid" alt="Placeholder image"> </div>
	    <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
	      <p>We have measures in place to help keep you safe from the moment you book to the moment you (reluctantly) head home.</p>
	    <img src="images/about/booktravel.jpg" class="img-fluid" alt="Placeholder image"> </div>
		<div role="tabpanel" class="tab-pane fade" id="paneThree1" aria-labelledby="hatstab1">
	      <p>At G Adventures, we don’t have tour guides — we have Chief Experience Officers. And they are all locally based, meaning they know the area you’re exploring like the back of their well-travelled hand.</p>
	    <img src="images/about/guide.jpg" class="img-fluid" alt="Placeholder image"> </div>
		<div role="tabpanel" class="tab-pane fade" id="paneFour1" aria-labelledby="hatstab1">
	      <p>We have always created our tours by building meaningful relationships with local communities, directly benefiting the people and places we visit.</p>
	    <img src="images/about/localcommunities.jpg" class="img-fluid" alt="Placeholder image"> </div>
		<div role="tabpanel" class="tab-pane fade" id="paneFive1" aria-labelledby="hatstab1">
	      <p>No matter the Travel Style, our tours balance well-planned itineraries with the flexibility to do your own thing and make the experience your own.</p>
	    <img src="images/about/flexibilityfun.jpg" class="img-fluid" alt="Placeholder image"> </div>
	    
      </div>
</div>
	<br>
	<br>
<?php include("_includes/footer.php"); ?>
	
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>