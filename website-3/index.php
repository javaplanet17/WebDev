<!DOCTYPE html>
<html>
<head>
	<title>multipages website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <meta charset="utf-8">
	 <meta name="viewport" content="initial-scale=1.0">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jquery below added the nav on scorll effect -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <style type="text/css">
  	  	.center {
     float: none;
     margin-left: auto;
     margin-right: auto;


	}

	.bgct{
		background-image: url("asset/background_city.jpg");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}

	.arrow-up {
  width: 0; 
  height: 0; 
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  
  border-bottom: 15px solid black;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 19px solid transparent;
  border-right: 19px solid transparent;
  
  border-top: 19px solid black;
}
	


  </style>
</head>
<body id="myPage" class="background-unique bg-grey" data-spy="scroll" data-target=".navbar" data-offset="60">
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
	
	<div class="container-fluid mt-7 bgct col-sm-9 height-5 center">
		<div class="row">
			<div class=" col-sm-9 center mt-10">
					<h1 class="br-left-3">Find the right people</h1>
					<h3 class="arrow-right br-bt-2 mt-3">Browse hundreds of experience individuals</h3>
					<p class="arrow-right mt-4">Learn more about us</p>
					<button class="btn mt-2">Hire people</button>
					<button class="btn mt-2">Become a member</button>
			</div>
		</div>
	</div>
	
	<div class=" col-sm-9 center bg-white mt-2 padding-all revealOnScroll" data-animation="lightSpeedIn" data-timeout="400" id="Social">
		<div class="row">
			<div class="text-center padding-lt mt-5">
			<h1>Employee of the month</h1>
			<p>These people are the best workers this month with 100% satisfaction from their clients.</p>
			<ul class="list-inline">
				<li>
					<button type="button" class="btn">Website developer</button>
					<button type="button" class="btn">Mobile developer</button>
					<button type="button" class="btn">Graphic designer</button>
				</li>
			</ul>

			<ul class="list-inline mt-5">
				<li class=" col-md-3">
					<div class="col-md-11 br-all padding-all">
						<img src="asset/" width="100" height="100">
					<h2>Jakso Dewo</h2>
					<h4>Front end web developer</h4>
					<p>Career</p>

					<table class="table">
						<thead>
							<tr>
								<th>Payment Rate:</th>
								<th>$15/hr</th>
							</tr>
							<tr>
								<th>Location:</th>
								<th>Virginia, USA</th>
							</tr>
							<tr>
								<th>Job Done:</th>
								<th>5/5</th>
							</tr>
						</thead>

					</table>
					<p><b>Skill set:</b></p>
					<ul class="list-inline">
						<li>html</li>
						<li>css</li>
						<li>sass</li>
						<li>javascript</li>
						<li>php</li>
						<li>...</li>
					</ul>
					<button type="button" class="btn mt-1 col-md-11 center">Hire me</button>
					</div>
					
				</li>
				<li class="col-md-3">
					<div class="col-md-11 br-all padding-all ">
						<img src="asset/" width="100" height="100">
					<h2>Jakso Dewo</h2>
					<h4>Front end web developer</h4>
					<p>Career</p>

					<table class="table">
						<thead>
							<tr>
								<th>Payment Rate:</th>
								<th>$15/hr</th>
							</tr>
							<tr>
								<th>Location:</th>
								<th>Virginia, USA</th>
							</tr>
							<tr>
								<th>Job Done:</th>
								<th>5/5</th>
							</tr>
						</thead>

					</table>
					<p><b>Skill set:</b></p>
					<ul class="list-inline">
						<li>html</li>
						<li>css</li>
						<li>sass</li>
						<li>javascript</li>
						<li>php</li>
						<li>...</li>
					</ul>
					<button type="button" class="btn mt-1 col-md-11 center">Hire me</button>
					</div>
					
				</li>
				<li class="col-md-3">
					<div class="col-md-11 br-all padding-all ">
						<img src="asset/" width="100" height="100">
					<h2>Jakso Dewo</h2>
					<h4>Front end web developer</h4>
					<p>Career</p>

					<table class="table">
						<thead>
							<tr>
								<th>Payment Rate:</th>
								<th>$15/hr</th>
							</tr>
							<tr>
								<th>Location:</th>
								<th>Virginia, USA</th>
							</tr>
							<tr>
								<th>Job Done:</th>
								<th>5/5</th>
							</tr>
						</thead>

					</table>
					<p><b>Skill set:</b></p>
					<ul class="list-inline">
						<li>html</li>
						<li>css</li>
						<li>sass</li>
						<li>javascript</li>
						<li>php</li>
						<li>...</li>
					</ul>
					<button type="button" class="btn mt-1 col-md-11 center">Hire me</button>
					</div>
					
				</li>
				<li class="col-md-3">
					<div class="col-md-11 br-all padding-all ">
						<img src="asset/" width="100" height="100">
					<h2>Jakso Dewo</h2>
					<h4>Front end web developer</h4>
					<p>Career</p>

					<table class="table">
						<thead>
							<tr>
								<th>Payment Rate:</th>
								<th>$15/hr</th>
							</tr>
							<tr>
								<th>Location:</th>
								<th>Virginia, USA</th>
							</tr>
							<tr>
								<th>Job Done:</th>
								<th>5/5</th>
							</tr>
						</thead>

					</table>
					<p><b>Skill set:</b></p>
					<ul class="list-inline">
						<li>html</li>
						<li>css</li>
						<li>sass</li>
						<li>javascript</li>
						<li>php</li>
						<li>...</li>
					</ul>
					<button type="button" class="btn mt-1 col-md-11 center">Hire me</button>
					</div>
					
				</li>
			</ul>
			</div>
		</div>	
	</div>

	<div class="container-fluid col-sm-9 center bg-white mt-2" id="Howitworks">
		<div class="row padding-all">
	<h1 class="text-center">How it works</h1>
							<br>
								<div class="col-md-4 center text-center">
								<div class="col-md-12">
									<span style="font-size:3em;"  class="glyphicon glyphicon-user"></span>
									<p><b>candidate</b></p>
									<p>Find thousand of potential candidate for the job.</p>
								</div>
								
							
								<div class="col-md-12">
								
									<br>
									<div class="arrow-down center"></div>
									<br>
									<div class="arrow-down center"></div>
									<br>
								</div>
							
								<div class="col-md-12">
									<span style="font-size:3em;"  class="glyphicon glyphicon-eye-open"></span>
									<p><b>Monitoring</b></p>
									<p>Easily monitor candidate progress on the task.</p>
								</div>
							
								<div class="col-md-12">
									<br>
									<div class="arrow-down center"></div>
									<br>
									<div class="arrow-down center"></div>
									<br>
								</div>
							
								<div class="col-md-12">
									<span style="font-size:3em;"  class="glyphicon glyphicon-credit-card"></span>
									<p><b>Payment</b></p>
									<p>Full payment only due after the job are done.</p>
								</div>
							
								<div class="col-md-12">
									<br>
									<div class="arrow-down center"></div>
									<br>
									<div class="arrow-down center"></div>
									<br>
								</div>
							
								<div class="col-md-12">
									<span style="font-size:3em;"  class="glyphicon glyphicon-ok"></span>
									<p><b>Satisfaction Guarantee</b></p>
									<p>We work hard to make you satisfy and it is easy to contact us anytime you like.</p>
								</div>
							</div>				
		</div>	
	</div>

	<div class="container-fluid col-sm-9 center bg-white mt-2 mb-2">
		
			<h1 class="text-center">Our Available Services</h1>
			<p>pfndsi fslkd gnsfjlkd ng;lfsd nbgl;ksfdn blsdn bl;kfdn bl;fd <br> nbl;afd nbsfl;dfb flkda bnlkafdbn dfl;nb aflkd bnflkd bdflk bnlkdfb nlkfd bnflkd nlkdfb nlkdf bnldfk bndflkb df </p>
			<ul class="list-inline mt-5">
				<li class="col-md-4 mt-4 ">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-hdd ">  IOS Development</span>
					</div>
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd for IOS 6 - IOS 11. We also provide a service in creating the Augmented Reality for the new IOS 11.</p>
				</li>
				<li class="col-md-4 mt-4 ">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-phone ">  Android Development</span>
					</div>
					
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd for IOS 6 - IOS 11. We also provide a service in creating the Augmented Reality for the new IOS 11.</p>
				</li>
				<li class="col-md-4 mt-4 ">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-open-file">  Web & Design Development</span>
					</div>
					
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd with HTML,CSS,SASS, etc. with clean and easily maintain coddsadsadsad sadsada s adasd asd sa dasd ase</p>
				</li>
				<li class="col-md-4 mt-4">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-blackboard">  Graphic Designer Development</span>
					</div>
					
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd for Create beautiful and eye catching graphic design, for websites, mobile application UI/UX or Business card designing.</p>
				</li>
				
				<li class="col-md-4 mt-4">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-lock">  Cyber Security</span>
					</div>
					
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd secure your website and application. give yourself and your client a piece of ming from malicious virus that attacked. give</p>
				</li>
				<li class="col-md-4 mt-4">
					<div class="col-sm-12">
					<span style="font-size:1.5em;" class="glyphicon glyphicon-hdd ">  Database Development</span>
					</div>
					
					<p class="mt-4">fdmfl sdlg sdlk gmdsk gdslk gsdlk gdslk gmsdlk msdlk gmdslkg mlksd gmlsd sd Create your own private database and protect them from intruder and hackers.</p>
				</li>
			</ul>

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
		    $(function() {

		  var $window           = $(window),
		      win_height_padded = $window.height() * 1.1,
		      isTouch           = Modernizr.touch;

		  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

		  $window.on('scroll', revealOnScroll);

		  function revealOnScroll() {
		    var scrolled = $window.scrollTop(),
		        win_height_padded = $window.height() * 1.1;

		    // Showed...
		    $(".revealOnScroll:not(.animated)").each(function () {
		      var $this     = $(this),
		          offsetTop = $this.offset().top;

		      if (scrolled + win_height_padded > offsetTop) {
		        if ($this.data('timeout')) {
		          window.setTimeout(function(){
		            $this.addClass('animated ' + $this.data('animation'));
		          }, parseInt($this.data('timeout'),10));
		        } else {
		          $this.addClass('animated ' + $this.data('animation'));
		        }
		      }
		    });
		    // Hidden...
		   $(".revealOnScroll.animated").each(function (index) {
		      var $this     = $(this),
		          offsetTop = $this.offset().top;
		      if (scrolled + win_height_padded < offsetTop) {
		        $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
		      }
		    });
		  }

		  revealOnScroll();
		});
		  //# sourceURL=pen.js
	</script>

</body>
</html>