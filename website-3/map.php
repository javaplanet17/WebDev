<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <meta charset="utf-8">
	 <meta name="viewport" content="initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jquery below added the nav on scorll effect -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
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
  <div class="col-md-5 height-5 bg-blue">
  	<div id="map"></div>
  </div>
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
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWyr9EIHA7tLJk_iN_vmvd-Q5y5SwxHrk&callback=initMap"
    async defer></script>
  </body>
</html>