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
    <br><br><br>

    <!-- content -->
    
	<div class="container-fluid">
      <div class="row">
      <!-- side content -->
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
          
            <li class="nav-item">
              <a class="nav-link bg-pink font-white" href="#">Best Match <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link font-pink" href="#">Highest Rank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-pink" href="#">Nearest</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-pink" href="#">Newest</a>
            </li>
            
          </ul>
        </nav>

      <!-- main content -->
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1 class="text-center">Dashboard</h1>
          <p>High to low</p>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
           <div class="single-blog-item">
                    <div class="blog-thumnail">
                        <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                        <a href="" class="more-btn">View More</a>
                    </div>
                    <span class="blog-date">May 03, 2015</span>
                </div>
         </div>
         
        <div class="col-md-4">
           <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                    <a href="" class="more-btn">View More</a>
                </div>
                <span class="blog-date">June 03, 2015</span>
            </div>
         </div>
         
        <div class="col-md-4">
           <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                    <a href="" class="more-btn">View More</a>
                </div>
                <span class="blog-date">July 03, 2015</span>
            </div>
         </div>
            
         <div class="col-md-4">
           <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                    <a href="" class="more-btn">View More</a>
                </div>
                <span class="blog-date">July 03, 2015</span>
            </div>
         </div>

         <div class="col-md-4">
           <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                    <a href="" class="more-btn">View More</a>
                </div>
                <span class="blog-date">July 03, 2015</span>
            </div>
         </div>

         <div class="col-md-4">
           <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="http://via.placeholder.com/370x275" alt="blog-img"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita exercitationem nostrum, eligendi quis, esse quos atque in molestias animi.</p>
                    <a href="" class="more-btn">View More</a>
                </div>
                <span class="blog-date">July 03, 2015</span>
            </div>
         </div>
                        
        </div>
      </div>


        </main>
      </div>
    </div>

    <?php footer() ?>
</body>
</html>