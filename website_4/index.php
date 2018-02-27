<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Construction service</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mobile.css" media="screen and (max-width: 768px)">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#menu-icon").click(function(){
		        $(".banner").css("background-color", "yellow");
		    });
		});
	</script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
		<div class="header-inner">
			<article>
				<a href="index.php" id="logo"></a>
			</article>
			
			<aside>
				<nav>
					<a href="#" id="menu-icon"></a>
					<ul>
						<li><b><a href="index.php" class="current">Home</a></b></li>
						<li><b><a href="reason"> why me</a></b></li>
						<li><b><a href="portofolio"> previous work</a></b></li>
						<li><b><a href="#"> contact me</a></b></li>
					</ul>
				</nav>
			</aside>
			
		</div>
	</header>
	
	<section class="banner">
		<div class="banner-inner">
			<article>
				
			</article>
			<aside>
				<h1>I WILL MAKE YOUR IMAGINATION COME TO LIVE.</h1>
			</aside>
		</div>
	</section>

	<section class="reason">
		<div class="reason-inner">
			<article>
				<div class="left">
					<h1 class="left_title">WHY CHOOSE ME</h1>
				</div>
			</article>
			
			<aside>
				<div class="right">
					<ul>
						<li>
							<img src="img/icon/discount.png" width="30" height="30">
							<b>Safe your money</b>
							<p>Get a great discount by contacting me directly and skip the middle man.</p>
						</li>

						<li>
							<img src="img/icon/check.png" width="30" height="30">
							<b>Trustworthy</b>
							<p>You will get to know me and you will know that i  always give you the better result than any other services.</p>
						</li>

						<li>
							<img src="img/icon/craftmanship.png" width="30" height="30">
							<b>Great craftmanship</b>
							<p>I am experienced Construction worker who pay attention in details. and always give the best result until my client satisfied.</p>
						</li>

					</ul>
				</div>
			</aside>
			
		</div>
	</section>
	
	<section class="portofolio">
		<div class="portofolio-inner">
			<article>
				<div class="left">
					<h1 class="left_title">MY PREVIOUS WORKS</h1>
				</div>
			</article>
			
			<aside>
				<!-- <div class="slider">
					<ul>
						<li>
							<img src="img/bath room.jpg">
							<h3>Bath room</h3>
							<p>10 pictures</p>
						</li>
						<li>
							<img src="img/kitchen.jpg">
							<h3>Kitchen</h3>
							<p>10 pictures</p>
						</li>
						<li>
							<img src="img/bed room.jpg">
							<h3>Bed room</h3>
							<p>10 pictures</p>
						</li>
						<li>
							<img src="img/living room.jpg">
							<h3>Living room</h3>
							<p>10 pictures</p>
						</li>
					</ul>
					
					<ul>
						<li>____</li>
						<li>____</li>
						<li>____</li>
						<li>____</li>
					</ul>
				</div> -->
				<div class="right">
					<div class="container">
		
						<input type="radio" id="i1" name="images" checked />
						<input type="radio" id="i2" name="images" />
						<input type="radio" id="i3" name="images" />
						<input type="radio" id="i4" name="images" />
						<input type="radio" id="i5" name="images" />	
						
						<div class="slide_img" id="one">			
								
								<img src="https://zhzzs3vdzwufl3f53491vhsc-wpengine.netdna-ssl.com/wp-content/uploads/2014/02/Red-Oak-Hardwood-Flooring-Instalation-vancouver-bc-canada-.jpg">
								
								<!-- 	<label class="prev" for="i5"><span>&#x2039;</span></label> -->
									<!-- <label class="next" for="i2"><span>&#x203a;</span></label>	 -->
							
						</div>
						
						<div class="slide_img" id="two">
							
								<img src="https://www.jabaras.com/media/images/page-wood-flooring1.jpg" >
								
									<!-- <label class="prev" for="i1"><span>&#x2039;</span></label>
									<label class="next" for="i3"><span>&#x203a;</span></label> -->
							
						</div>
								
						<div class="slide_img" id="three">
								<img src="https://fthmb.tqn.com/R7uHvgq4CANKmsTk87Wea6NHAKs=/960x0/filters:no_upscale()/168324184-56a49f1c3df78cf772834e0c.jpg">	
								
									<!-- <label class="prev" for="i2"><span>&#x2039;</span></label>
									<label class="next" for="i4"><span>&#x203a;</span></label> -->
						</div>

						<div class="slide_img" id="four">
								<img src="http://www.luxmagnadesigns.com/wp-content/uploads/2017/02/stylish-modern-kitchen-colors-great-kitchen-design-ideas-on-a-budget.jpg">	
								
									<!-- <label class="prev" for="i3"><span>&#x2039;</span></label>
									<label class="next" for="i5"><span>&#x203a;</span></label> -->
						</div>

						<div class="slide_img" id="five">
								<img src="https://s.aolcdn.com/hss/storage/midas/b008e12102b62657968491b07d789135/206027438/toto.jpg">	
								<!-- 
									<label class="prev" for="i4"><span>&#x2039;</span></label>
									<label class="next" for="i1"><span>&#x203a;</span></label> -->

						</div>

						
							
					</div>
					<div id="nav_slide">
							<label for="i1" class="dots" id="dot1"></label>
							<label for="i2" class="dots" id="dot2"></label>
							<label for="i3" class="dots" id="dot3"></label>
							<label for="i4" class="dots" id="dot4"></label>
							<label for="i5" class="dots" id="dot5"></label>
						</div>

					<!-- description -->
					<h2>Bathroom</h2>
					<p>hello</p>
				</div>

			</aside>
			
		</div>
	</section>
	

	<footer>
		<article>
			<div class="left">
				<h4>Get in touch with me</h4>
				<p>You can contact me from my phone through text or call. i am available to receive your message 6 am - 10 pm, everyday. </p>
			</div>
			
		</article>
		
		<aside>
			<ul>
				<li><img src="img/icon/location.png" width="20" height="20">Falls church, VA - 22042</li>
				<li><img src="img/icon/old_phone_50.png" width="15" height="15">703 499 0996</li>
				<li><img src="img/icon/hard_hat_50.png" width="20" height="20">John Smith</li>
			</ul>
		</aside>
	</footer>


		
</body>
</html>