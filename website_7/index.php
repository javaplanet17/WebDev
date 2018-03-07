<?php 
	include 'php/header.php';
	include 'php/footer.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Notepal</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		
		<?php echo $header; ?>
	<section class="banner">
		<div class="inner">
			<article>
				<h1>Simple way to organize your notes</h1>
				<p>Take a note once and share it on multiple devices. compatible with IOS, Android, Mac and Window computers.</p>
				<button class="download">Download now</button>
				<button>Sign in</button>
			</article>
			<aside>
				<img src="img/devices.png">
			</aside>
		</div>
		
	</section>

	<section class="status">
		<ul>
			<li>
				<h2>5.3 M</h2>
				<b>Download counts</b>
			</li>
			<li>
				<h2>763.3 K</h2>
				<b>Currently active</b>
			</li>
			<li>
				<h2>4.2 M</h2>
				<b>Notes Saved</b>
			</li>
			<li>
				<h2>4.7</h2>
				<b>Overall ratings</b>
			</li>
		</ul>
	</section>
		
	<section class="features">
		<ul>
			<li>
				<img src="img/features-1.png" width="100px" height="100px">
				<h2>Easy to use</h2>
				<p>Easy to learn to use the program. it is design to follow the way a person take notes.</p>
				<button>Read more</button>
			</li>
			<li>
				<img src="img/features-2.png" width="100px" height="100px">
				<h2>Multiplatform</h2>
				<p>Take notes once and open it on all of you devices, you can also take note with sound,picture,etc.</p>
				<button>Read more</button>
			</li>
			<li>
				<img src="img/features-3.png" width="100px" height="100px">
				<h2>Connect all</h2>
				<p>Connect all of your note with other people you can check for mistakes or if you have a questions.</p>
				<button>Read more</button>
			</li>
		</ul>
	</section>

	<section class="activity">
		<h1>User Activity</h1>
		<ul>
			<li>Android</li>
			<li>Ios</li>
			<li>Computer</li>
		</ul>

		<table>
			<tr>
				<th>Number</th>
				<th>Status</th>
				<th>Name</th>
				<th>Title</th>
				<th>Description</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Online</td>
				<td>Alan</td>
				<td>Notepal</td>
				<td>currently writing a notes</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Online</td>
				<td>Cindy</td>
				<td>Notepal</td>
				<td>currently writing a notes</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Online</td>
				<td>Jenny</td>
				<td>Notepal</td>
				<td>currently writing a notes</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Online</td>
				<td>Rus</td>
				<td>Notepal</td>
				<td>currently writing a notes</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Online</td>
				<td>Kelly</td>
				<td>Notepal</td>
				<td>currently writing a notes</td>
			</tr>
		</table>
	</section>

	<section class="additional">
		<div class="inner">
			<article>
				<div class="box-small">
					<img src="img/additional-1.png" width="20px" height="20px">
					<h3>Word Recognition</h3>
					<p>The app is smart enough to recognize similar word when you write on the device.</p>
				</div>
			</article>
			<aside>
				<div class="box-small">
					<img src="img/additional-2.png" width="20px" height="20px">
					<h3>Word Recognition</h3>
					<p>The app is smart enough to recognize similar word when you write on the device.</p>
				</div>
			</aside>
		</div>
	</section>

	<section class="founder">
		<h2>Founder of the application</h2>
		<div class="box-big">
			<img src="img/personal.jpg" width="100px" height="100px">
			<p><b>Bio:</b></p>
			<p class="box-big-divider">i am a full stack web developer and mobile app developer</p>

			<p class="box-big-close"><b>Jakso Dewo</b></p>
			<p class="box-big-status">Founder</p>
		</div>
	</section>

	<?php echo $footer; ?>
	</div>
</body>
</html>