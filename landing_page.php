<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>WMU Bookstore</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="css/mediaqueries.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
	<header class ="header-section">
	<nav class="navbar navbar-expand-md navbar-custom">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed brand" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"><i class="fas fa-bars"></i></span>
	      </button>
	      <div class="row">
	      <a class="navbar-brand" href="landing_page.php"><img class="logoimage" src="img/book.jpg" alt="WMU Bookstore Logo"></a>
	   </div>
	</div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
   		<ul class="navbar-nav main-nav">
			 <li class="nav-item">
		        <a class="nav-link" href="Prasun1.php">Novels<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="Prasun2.php">Biographies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="sell.html">Sell Your Book</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="sale.php">Sale</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about.html">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="hours.html">Store Hours</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.html">Contact</a>
		      </li>
		</ul>
		<ul class="navbar-nav mr-auto main-nav sec-nav">
		 	<li class="nav-item">
		        <p>Hey Prashan</p>
		      </li>
		     <li class="nav-item">
		        <a class="nav-link" href="Prasun3.php"><i class="fas fa-shopping-bag"></i>  Bag</a>
		      </li>
		</ul>
	</div>

</nav>
</header>

	<section class= "homepage">

		<div class = "hero-box">
		<h1>Welcome to WMU Bookstore! <br>
		Your One Stop to All Education Materials</h1>
		<a href="sale.php" class="btn btn-full">Latest Sales</a>
		<a href="sell.html" class="btn btn-ghost">Sell Your Book</a>
		</div>

	</section>

	<section class = "features">
		<div class="row">
			<h2>"An investment in knowledge pays the best interest."</h2>
			<h3 class="paragraph"><i>Benjamin Franklin</i></h3>
		</div>
		<br>
		<div class="row">
			<div class="span-1-of-3 box">
				<i class="fab fa-paypal"></i>
				<h3>PayPal and PayPal Credit Now Accepted!</h3>
				<p>No Interest if paid in full in 6 months on purchases of $99+ with PayPal Credit. Subject to credit approval.</p>
			</div>
			<div class="span-1-of-3 box">
				<i class="fas fa-book"></i>
				<h3>Rent a Book</h3>
				<p>Rent and get the same book you want for less than half the new textbook price.</p>
			</div>
			<div class="span-1-of-3 box">
				<i class="fas fa-star"></i>
				<h3>Just What You Needed</h3>
				<p>We've got you covered for all of your preferences, whether used or digital books.</p>
			</div>
		</div>
	</section>

	<section class="customer">
		<div class="row">
			<h2>Student's Reviews</h2>
		</div>
		<div class="row">
			<div class="span-1-of-3 review">
				<p>WMU Bookstore has the collection of all the course materials required for all the majors available at Western Michigan University. They are available at a really affordable price.</p>
				<cite><img src="img/face1.jpg">Layla Adams</cite>
			</div>
			<div class="span-1-of-3 review">
				<p>The Bookstore saves me a lot of trouble of spending a lot of time searching for the best books for my courses. I really recommend using the bookstore. I love it!</p>
				<cite><img src="img/face2.jpg">Joana Silva</cite>
			</div>
			<div class="span-1-of-3 review">
				<p>I don't really prefer to spend a lot of money buying books, and that's why I prefer to rent. WMU Bookstore provides books at almost half the price for renting.</p>
				<cite><img src="img/face3.jpg">Milton Chapman</cite>
			</div>
		</div>
	</section>


	<section class="youtube">
		<div class = "row">
		<div class="span-1-of-2">
		<iframe width="500" height="315"
	src="https://www.youtube.com/embed/t_X9_At37Ck">
		</iframe>
		</div>
		<div class = "span-1-of-2 rentalp">
			<h2>Textbook Rental 101</h2>
			<p>How does it all work? Check out our video to get all the details in just over a minute.
			</p>
		</div>
		</div>
	</section>

	<section class="newsletter">
	  <div class="container">
	    <h3>Subscribe to our Newsletter</h2>
	    <form>
	      <input type="email" name="email" placeholder="Enter your email">
	      <button class="sub_button" type="submit">Subscribe</button>
	    </form>
	  </div>
	</section>


<footer>
   <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="landing_page.php">Back to top</a></li>
  </ul>
	</nav>


	<div class="container">
  <a href="landing_page.php" class="site-logo">
          <img src="img/book.jpg" alt="WMU Bookstore Logo">
        </a>

  <p>WMU Bookstore &copy; 2020</p>


</div>
</footer>

</body>
</html>
