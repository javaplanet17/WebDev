<?php
include('function.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Test for webdev 2</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- 3.3.7 bootstrap v -->
    <!--<link href="bootstrap2/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link rel="stylesheet" type="text/css" href="css/buffer.css">
</head>
<body>
  
<?php navbar(); ?>

    <!-- distance between navigation bar and content below it -->
    <br><br>

    <!-- content -->
    
	<div class="container-fluid">
      <div class="row bg-pink">
         <div class="col-md-6 test-nav">
          <div class="mt-sm-5">

            <div class="jumbotron bg-pink">
              <div class="container">
                <h1 class="display-2">Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                
              </div>

            </div>
          </div>
          
        </div>
        
        <div class="col-md-6 mt-sm-2 bg-white">
          <div class="mt-sm-4">
          <h2 class="text-center">Create your Account</h2>
          <form>
            <!-- top bottom -->
            <div class="form-group">
              <label for="inputAddress" class="col-form-label">Email address</label>
              <input type="email" class="form-control" id="inputAddress" placeholder="Email address">
            </div>
            <div class="form-group">
              <label for="inputAddress2" class="col-form-label">Username</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="inputAddress2" class="col-form-label">Password</label>
              <input type="password" class="form-control" id="inputAddress2" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputAddress2" class="col-form-label">Re-Password</label>
              <input type="password" class="form-control" id="inputAddress2" placeholder="Re-Password">
            </div>
            <!-- side by side -->
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4" class="col-form-label">First name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4" class="col-form-label">Last name</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Last name">
              </div>
            </div>
            <input type="submit" class="btn btn-pink col-md-12 mt-sm-3" value="Create Account">
          </form>
          </div>
        </div>

      </div>
    </div>
    <?php footer() ?>
</body>
</html>