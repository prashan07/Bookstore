<?php
include('server.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
<body style="background-color: #008080">

<section class="userreg">
	<h2>Registration</h2>

	<img src="img/book.jpg" alt="WMU Bookstore Logo">
	

		<form action = "registration.php" method = "post">
			<?php include('errors.php') ?>
			<div>
				<label for="email"></label>
				<input type="email" name="email" placeholder="Email" required>
			</div>
			<div>
				<label for="username"></label>
				<input type="text" name="username" placeholder="Username" required>
			</div>
			<div>
				<label for="password"></label>
				<input type="password" name="password_1" placeholder="Password" required>
			</div>
			<div>
				<label for="password"></label>
				<input type="password" name="password_2" placeholder="Confirm Password" required>
			</div>

			<button type = "submit" class="btn btn-submit" name="reg_user">Submit</button>

			<p>Already a user?<a href = "login.php"><b>Log In</b></a></p>

		</form>


	</div>

</body>
</html>