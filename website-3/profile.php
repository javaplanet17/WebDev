<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jquery below added the nav on scorll effect -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
        .center {
     float: none;
     margin-left: auto;
     margin-right: auto;
 	}
     .list-group li{
     	list-style-type: none;
     }
  
  </style>
</head>
<body id="myPage" class="bg-grey" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top " id="">
		<div class="col-sm-9 center">
			<div class="navbar-header">
			<!-- mobile size right button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
		
			<div class="collapse navbar-collapse" id="MyNavbar">
				<ul class="list-inline navbar-center mt-2 mb-2 font-black">
					<li class="pull-left"><a href="index.php">Services</a></li>
					<li class="pull-left"><a href="">About</a></li>
					<li class="pull-left"><a href="">Browse</a></li>
					<li class="pull-left"><a href="">Location</a></li>
					<li class="pull-right"><span class="glyphicon glyphicon-search"> search</span></li>
					<li class="pull-right"><span class="glyphicon glyphicon-shopping-cart"> cart</span></li>
					<li class="pull-right"><span class="glyphicon glyphicon-user"> account</span></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- this div is the background div -->
	<div class="container-fluid nav-cont center col-md-12 bg-grey">

		<div class=" row center col-md-9 bg-white mt-2">
			<div class="col-md-10 center">

				<div class=" col-md-4 mt-5 height-7 ">
					<div class="col-md-12">
						<img class="center" src="asset/girl.jpg" width="230" height="200">
					<br><br>
					<p class="br-m-2">Review:</p>
					<ul class="list-group">
						<li class="mt-2">
							<p><b>John Smith</b>
							
							<br>Very professional and patient person. very easy to work with and exceed expectation.</p>
						</li>
						<li class="mt-2">
							<p><b>Catherine squarez</b>
							
							<br>He is very nice and giving a great advice, the person i go to when it come to my website. :)</p>
						</li>
					</ul>
					<p class="br-m-2">Skill set:</p>
					<ul class="list-group">
						<li>Html</li>
						<li>Css</li>
						<li>Sass</li>
						<li>Php</li>
						<li>Javascript</li>
					</ul>
					</div>
				</div>

				<div class=" col-md-8 mt-5 height-6">
					<ul class="list-inline">
						<li><h3>Jakso Dewo</h3></li>
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-map-marker"> Virginia,US</li>
						<li class="pull-right"><button class="btn"> Hire me </button></li>
					</ul>
					
					<p class="mt-2">Rating:</p>
					<p>5/5</p>

					<ul class="list-inline mt-5 br-m-2 pb-1b">
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-share"> Shares</li>
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-comment"> Contact</li>
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-arrow-left"> Projects</li>
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-book"> About</li>
						<li class="medium ml-1 mr-1"><span class="glyphicon glyphicon-flag"> Report</li>
					</ul>
					
				</div>		
			</div> <!-- ending of center -->
		</div>
	</div>

	<!-- footer -->
	<footer class="container-fluid col-md-12 center footer bg-white mt-2 font-black">
	<div class="col-sm-9 center">
		<div class="col-md-12 br-m-1">
		<ul class="list-inline navbar-center mt-2 mb-2 font-black">
			<li class="pull-left bigger"><a class="font-black" href="index.html"><b>Service</b></a></li>
			<li><b>About</b></li>
			<li>Become member</li>
			<li>Location</li>
			<li>Browse</li>
			<li>Contact</li>
			<li class="pull-right">
				<img src="" width="" height="" alt="facebook">
			</li>
			<li class="pull-right">
				<img src="" width="" height="" alt="twitter">
			</li>
			<li class="pull-right">
				<img src="" width="" height="" alt="linkedin">
			</li>
		</ul>
	</div>
	
	<div class="col-md-12">
		<ul class="list-inline mt-2 mb-2">
			<li class="pull-left"><a class="font-black" href="">Copyright@Jakso Dewo</a></li>
			<li class="pull-right"><p>Terms & Services</p></li>
			<li class="pull-right"><p>Website Purpose</p></li>
		</ul>
	</div>
	</div>
	</footer>
</body>
</html>