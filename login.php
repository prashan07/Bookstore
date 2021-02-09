<?php
include('server.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
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
<body style="background-color: #008080">


<section class="userlogin">
	<h2>Log In</h2>

	<img src="img/book.jpg" alt="WMU Bookstore Logo">
	<h3>WMU Bookstore</h3>

 	<form action = "login.php" method = "post">
			<?php include('errors.php') ?>
			<div>
				<label for="username"></label>
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div>
				<label for="password"></label>
				<input type="password" placeholder="Password" name="password_1" required>
			</div>

			<button type = "submit" class="btn btn-submit" role="button" name="submit" name="login_user">Submit</button>


			<p>Not a user?<a href = "registration.php"><b>Register Here</b></a></p>

	</form>


</section>


</body>
</html>