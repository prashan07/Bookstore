
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


<!-- FORM -->
<section class="info">
      <form id="pay" method="get" action="http://www.randyconnolly.com/tests/process.php">
         <fieldset>
          <legend> <strong>Payment Information</strong></legend>
          <label><i class="fa fa-user"></i><strong>Full Name</strong></label><br>
          <input type="text" name="customer_name" placeholder="Enter name"><br><br>
          <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
          <input type="text" id="email" name="email" placeholder="john@example.com"><br><br>
           <label><i class="fa fa-user"></i><strong>Name on Card</strong></label><br>
          <input type="text" name="customer_name" placeholder="Enter name"><br><br>
           <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div><br>
          <label><strong>Card Type</strong></label><br>
          <select name="card" >
            <optgroup>
              <option disabled selected>Choose your card type</option>
              <option>VISA</option>
              <option>Discover</option>
              <option>American Express</option>
              <option>Master Card</option>
            </optgroup>
          </select>
          <br><br>
          <label for="ccnum">Credit card number</label>
          <br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX">
          <br><br>
          <label>Address</label>
          <br>
            <input type="text" name="Address" placeholder="Type your address here">
          <br><br>
          <label>Zip Code</label>
          <br>
            <input type="text" name="Zip Code" placeholder="XXXX">
          <br><br>

          <label><strong>Type</strong></label>
          <br>
          <input type="radio" name="Ebook">Ebook
          <input type="radio" name="Hard Copy">Hard Copy
          <br><br>
           <select name="Quantity" >
            <optgroup>
              <option disabled selected>Quantity</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </optgroup>
          </select><br><br>

          <input type="submit" name="Confirm Payment">
          <br>


         </fieldset>
       </form>         
    </section>    
<!-- ...................... -->



<footer>
   <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="Prasun3.php">Back to top</a></li>
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