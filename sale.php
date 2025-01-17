<?php
  include 'all_arrays.php';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>WMU Bookstore</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
   <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="css/mediaqueries.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class ="header-section">
        <nav class="navbar navbar-expand-lg navbar-custom">

        <a class="navbar-brand" href="landing_page.php"><img src="img/book.jpg" alt="WMU Bookstore Logo"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
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
        <form class="form-inline my-2 my-lg-0">
        <script async src="https://cse.google.com/cse.js?cx=015516095912375252762:bmk60e0xaly"></script>
        <div class="gcse-search"></div>
        </form>
        <ul class="navbar-nav mr-auto bag">
         <li class="nav-item">
            <a class="nav-link" href="Prasun3.html"><i class="fas fa-shopping-bag"></i> Bag</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<section class="sale_main">
  <h2> Sales and Offers </h2>
  
  <?php 
    foreach ($sale as $key => $value) {

      echo '<article class= "sale_offers">';
      echo '<div class="jumbotron">';
      echo '<div class="row">';
      echo '<div class="span-1-of-2">';
      echo '<figure>';
      echo '<img src="img/'.$sale[$key]["image"].'">';
      echo '</figure>';
      echo '</div>';
      echo '<div class="span-1-of-2">';
      echo '<div class="textbox">';
      echo '<h3><b>'.$sale[$key]["title"].'</b></h3>';
      echo '<h4>'.$sale[$key]["date"].'</h4>';
      echo '<p>'.$sale[$key]["desc"].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</article>';
    }

  ?>

</section>

<footer>
   <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="sale.php">Back to top</a></li>
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
