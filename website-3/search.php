<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Search here</title>
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
					<li><a class="" href="index.html#Howitworks">How it works</a></li>
					<li><a class="" href="#Maps">Location</a></li>
					<li><a class="" href="Login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid nav-cont center bg-white col-md-12">
		<div class="row">
			<form class="form-inline col-md-10 center" method="search.php" action="post">
				 <div class="form-group bg-red col-md-5">
				      <label for="email">Email address:</label>
				      <input type="email" class="form-control col-md-5" id="email">
				  </div>
				  <div class="form-group col-md-3 bg-blue">
					  <select class="form-control" id="sel1">
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
					  </select>
				</div>
				<label class="checkbox-inline bg-yellow col-md-2">
			      <input type="checkbox" value="">Option 1
			    </label>
			    <div>
			    	<label for="button">Type:</label>
			    	<button type="button" class="btn btn-default col-md-2">Front end</button>
			    	<button type="button" class="btn btn-default col-md-2">Back end</button>
			    	<button type="button" class="btn btn-default col-md-2">Web design</button>
			    	<button type="button" class="btn btn-default col-md-2">Database</button>
			    	<button type="button" class="btn btn-default col-md-2">Mobile app</button>
			    </div>
			    <div class="form-group">
					  <label for="sel1">Price:</label>
					  <input id="email" type="text" class="form-control" name="email" placeholder="Email">
				</div>

				<b>€ 10</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b>€ 1000</b>

				<div class="input-group">
				    
				    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    </div>
			</form>
		</div>
	</div>

	<div class="container-fluid col-md-10 center">
		<h3 class="mt-5">Search result</h3>

		<ul class="navbar-nav nav col-md-12">
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>

			<!-- second row -->
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>
			<li class="height-5list col-md-4 mt-5">
				<img src="asset/girl.jpg" width="100%" height="250">
				<div class="bg-white col-md-12">
					<h3 class="col-md-12">Someone name</h3>

					<div class="col-md-12">
						<img src="asset/girl.jpg" width="50" height="50">
						<p class="col-md-9">Address is here,va,22030 </p>
					</div>
					
					<div class="col-md-12 mt-1">
						<img src="asset/girl.jpg" width="50px" height="50px">
						<p class="col-md-9">Background check</p>
					</div>
					

					<div class="col-md-12 mt-1">
						<p class="col-md-3">Rate:</p>
						<p class="col-md-9">$15/hr - $299/day</p>
					</div>
					
					<button type="button" class="btn btn-danger col-md-12">Hire me!</button>
				</div>
			</li>

		</ul>
	</div>

	<div class="container-fluid col-md-10  nav-cont center text-center">
	<ul class="unorder center">
		<li class="mr-1">
 			<button class="btn" type="button">1</button>
		</li>
		<li class="mr-1">
			<button class="btn" type="button">2</button>
		</li>
		<li class="mr-1">
			<button class="btn" type="button">3</button>
		</li>
	</ul>
	</div>

	<!-- footer -->
	<footer class="container-fluid col-md-12 center footer bg-dark font-white padding-lt nav-cont">

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

	<script type="text/javascript">
	

		// Without JQuery
		var slider = new Slider('#ex2', {});
	</script>
</body>
</html>