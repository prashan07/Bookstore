<?php
include 'novelArray.php';

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
  <link rel="stylesheet" type="text/css" href="css/style.css">
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

<section id="featured">
  <div class="container">
    <h1 class="edit">Novels</h1>

    <?php

    foreach ($images as $id => $value) {



    echo '<div class = "box">';
      echo '<img src = "img/'.$images[$id]["path"].'">';
      echo '<h3> <strong>'.$images[$id]["title"].'</strong> </h3>';
      echo '<p><em>'.$images[$id]["author"].' </em></p>';
      echo '<p>'.$images[$id]["price"].'</p>';
      echo '<p> <a href="Prasun3.php"><button>Proceed to checkout <i class="fa fa-shopping-cart"></i></button> </a> </p>';
      echo '</div>';

    }

    ?>


  </div>
</section>




<footer>
   <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="Prasun1.php">Back to top</a></li>
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
