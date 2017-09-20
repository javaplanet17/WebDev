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
      <div class="row">
      <!-- side content -->
      
        <nav class=" col-md-3 bg-light ">
        <p></p>
        <div class="col-md-12">
          <div class="mt-sm-1">
            <div class="jumbotrons bg-light">
              <div class="container">
                <ul class="nav nav-pills flex-column ">
              
                <li class="nav-item">
                  <img src="asset/girl.jpg" width="200" height="200">
                </li>
                
                <li class="nav-item">
                  <h3 class="display-5 mt-sm-3">Username</h3>
                </li>
                <li class="nav-item mt-sm-3 row">
                  <h4 class="col-sm-6">first name</h4>
                  <h4 class="col-sm-6">Last name</h4>
                  <p class="col-sm-6">myname</p>
                  <p class="col-sm-6">anothername</p>
                </li>
                <li class="nav-item">
                  <h4>Gender</h4>
                  <p>M</p>
                </li>
                <li class="nav-item mt-sm-3">
                  <h4><a class="nav-link bg-pink font-white" href="#">History <span class="sr-only">(current)</span></a></h4>
                </li>
                <li class="nav-item mt-sm-3">
                  <h4><a class="font-black" href="">Address</a></h4>
                </li>
                <li class="nav-item mt-sm-3">
                  <h4><a class="font-black" href="">Payment</a></h4>
                </li>
                <li class="nav-item mt-sm-3">
                  <h4><a class="font-black" href="">Setting</a></h4>
                </li>
              </ul>
              </div>
            </div>
          </div>
        </div>
        </nav>



      </div>
    </div>

  <?php footer() ?>
</body>
</html>