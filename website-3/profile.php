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
  </style>
</head>
<body id="myPage" class="bg-grey" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top " id="">
		<div class="container ">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand " href="index.html">Services</a>
			</div>
			<div class="collapse navbar-collapse" id="MyNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="" href="About.html">About</a></li>
					<li><a class="" href="#Howitworks">How it works</a></li>
					<li><a class="" href="#Maps">Location</a></li>
					<li><a class="" href="Login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid nav-cont center col-md-12 bg-grey ">
		<div class=" row center col-md-10">
		
			<div class=" col-md-3 bg-white ml-1 mr-1 mt-2 height-7">
			<img src="asset/" width="" height="">
			<p><b>First</b></p>
			<p>jakso</p>
			<p><b>Last</b></p>
			<p>Samsung</p>
			<img src="asset/" width="" height="">
			<p><b>Background check</b></p>
			<p><b>Experiences</b></p>
			<p>56 customers</p>
			</div>
			<!-- custom width -->
			<div class=" col-md-8 bg-white ml-1 mr-1 mt-2 height-1">
				<h3>Connection with</h3>
			</div>
			
			<div class=" col-md-8 bg-white ml-1 mr-1 mt-2 height-6">
				<h2>Web development</h2>
				<p>Career</p>
				<p><b>Rate:</b></p>
				<p>5 stars</p>

				<ul class="navbar-nav nav ">
					<li class="">
						<h4>Activities</h4>
					</li>
					<li>
						<h4>Reviews</h4>
					</li>
					<li>
						<h4>Connections</h4>
					</li>
				</ul>
			</div>		
		</div>
	</div>

	<!-- footer -->
	<footer class="container-fluid col-md-12 center footer nav-cont bg-dark font-white padding-lt">

	<div class="center col-md-11">
		<div class=" row col-md-12">
				<div class="col-md-6">
				<h3>Social media</h3>
				<ul class="nav navbar-nav col-sm-12">
					<li class="col-md-6 height-1n bg-blue">
						<h2>col 1</h2>
					</li>
					<li class="col-md-6 height-1n bg-green"> 
						<h2>col 2</h2>
					</li>
					<li class="col-md-6 height-1n bg-green"> 
						<h2>col 3</h2>
					</li>
					<li class="col-md-6 height-1n bg-blue">
						<h2>col 4</h2>
					</li>
				</ul>
				</div>

				<div class="col-sm-6">
				<h3>Get to know us more</h3>
				<ul class="navbar-nav nav nons col-md-12">
					<li>
						<ul>
							<h3>Hello</h3>
							<li class="nons medium">wazzup</li>
							<li class="nons medium">how</li>
							<li class="nons medium">are</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
						</ul>
					</li>
					<li>
						<ul>
							<h3>Hello</h3>
							<li class="nons medium">wazzup</li>
							<li class="nons medium">how</li>
							<li class="nons medium">are</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
						</ul>
					</li>
					<li>
						<ul>
							<h3>Hello</h3>
							<li class="nons medium">wazzup</li>
							<li class="nons medium">how</li>
							<li class="nons medium">are</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
						</ul>
					</li>
					<li>
						<ul>
							<h3>Hello</h3>
							<li class="nons medium">wazzup</li>
							<li class="nons medium">how</li>
							<li class="nons medium">are</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
							<li class="nons medium">you</li>
						</ul>
					</li>
				</ul>
					
				</div>
	</div>
		

		<div class=" row mt-6 col-md-12">
			<p class="float-rt mt-5">Website made by Jakso dewo</p>
			<h4 class="font-white">Get news of discounts from your email</h4>
			<form class="form-inline">
			    <div class="input-group">
			      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
			      <div class="input-group-btn">
			        <button type="button" class="btn btn-danger">Subscribe</button>
			      </div>
			    </div>
			</form>
		</div>
	</div>
	
		
	</footer>

</body>
</html>