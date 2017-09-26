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

	<div class="container-fluid nav-cont center bg-white mt-2 col-md-9 ">
		<div class="row">
			<form class="form-inline center" method="search.php" action="post">
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

	<div class="container-fluid col-md-9 center bg-white mt-2">
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

	<div class="container-fluid col-md-9  nav-cont center text-center">
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
	<footer class="container-fluid col-md-12 center footer bg-dark font-white">
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
				<li class="pull-left"><a href="">Copyright@Jakso Dewo</a></li>
				<li class="pull-right"><p>Terms & Services</p></li>
				<li class="pull-right"><p>Website Purpose</p></li>
			</ul>
		</div>
		</div>
	</footer>
	<script type="text/javascript">
	

		// Without JQuery
		var slider = new Slider('#ex2', {});
	</script>
</body>
</html>