<?php 
	include 'php/header.php';
	include 'php/footer.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>membership</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<?php echo $header; ?>
		<div class="inner">
			<section class="founder" style="height: 550px; margin: 0 auto; background-color: transparent;">
				<h1>Create Account</h1>
				<br>
				<p style="width: 40%; margin: 0 auto;">Create an account once here or with your social media and connect with all you notes in every devices.</p>
				<br><br>
				<article style="background-color: white; width: 40%;">
					<h3>Send us a message</h3>

					<table>
						<tr>
							<td>Email</td>
						</tr>
						<tr>
							<td>___________</td>
						</tr>
						<tr>
							<td>Firstname</td>
							<td>Lastname</td>
						</tr>
						<tr>
							<td>___________</td>
							<td>___________</td>
						</tr>
						<tr>
							<td>Message</td>
						</tr>
						<tr>
							<td>___________</td>
						</tr>
					</table>

					<table>
						<tr>
							<td>box</td>
							<td>complain</td>
						</tr>
						<tr>
							<td>box</td>
							<td>suggestion</td>
						</tr>
						<tr>
							<td>box</td>
							<td>feedback</td>
						</tr>
						<tr>
							<td>box</td>
							<td>bug</td>
						</tr>
					</table>
					<button>Submit</button>
				</article>

				<aside style="background-color: #2C2C2C; width: 40%;">
					<h3>OTHER WAYS</h3>
					<p>You may come to give us a visit for feedback or business solution.</p>
					<table>
						<tr>
							<td><img src="img/location.png" width="20px" height="20px"></td>
							<td>Location</td>
						</tr>
						<tr>
							<td><img src="img/email.png" width="20px" height="20px"></td>
							<td>Location</td>
						</tr>
					</table>
					<h4>social media</h4>
					<table>
						<tr>
							<td><img src="img/facebook.png" width="20px" height="20px;"></td>
							<td><img src="img/twitter.png" width="20px" height="20px;"></td>
							<td><img src="img/youtube.png" width="20px" height="20px;"></td>
						</tr>
					</table>
				</aside>
			</section>
		</div>
		<?php echo $footer; ?>
	</div>
</body>
</html>