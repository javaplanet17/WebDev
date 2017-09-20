<?php

function navbar(){
	$html = "
		<!-- top navigation -->
	<nav class='navbar navbar-expand-md navbar-dark fixed-top bg-pink'>
      <a class='navbar-brand' href='index.html'>Exscort</a>
      <button class='navbar-toggler d-lg-none' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse ' id='navbarsExampleDefault'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item active'>
            <a class='nav-link' href='index.html'>Home <span class='sr-only'>(current)</span></a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='list.php'>Girls</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='Profile.php'>My Profile</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='About.php'>How it works</a>
          </li>
        </ul>
        <form class='form-inline mt-md-0 col-sm-7 '>
          <input class='form-control mr-sm-1 col-sm-9' type='text' placeholder='Search' aria-label='Search'>
          <button class='btn btn-outline-success-pink-white my-2 my-sm-0' type='submit'>Search</button>
        </form>

        <ul class='navbar-nav my-2 my-lg-0'>
          <li class='nav-item '>
            <a class='nav-link' href='login.php'>Login <span class='sr-only'>(current)</span></a>
          </li>
          <li class='nav-item active'>
            <a class='nav-link' href='signup.php'>Create Account<span class='sr-only'>(current)</span></a>
          </li>
         </ul>
      </div>
    </nav>


	";

	echo $html;
}


function footer(){
	$html = "
		<ul class='font-white col-sm-12 bg-pink vertical-center custom-jumbotrons'>
			<li class='inlinea'>Affiliate</li>
			<li class='inlinea'>Become partner</li>
			<li class='inlinea'>How this works</li>
		</ul>

	";

	echo $html;
}
?>