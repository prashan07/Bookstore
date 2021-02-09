<?php

session_start();

// Initializing variables

$username = "";
$email = "";

$errors = array();

// Connecting to Database

$db = mysqli_connect('localhost', 'root', '', 'profiles') or die("Connection Failed.");

//Registration
if(isset($_POST['reg_user'])){

$email = mysqli_real_escape_string($db, $_POST['email']);

$username = mysqli_real_escape_string($db, $_POST['username']);

$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//Form Validation

if(empty($email)) {
	array_push($errors, "Email is required");
}
if(empty($username)) {
	array_push($errors, "Username is required");
}
if(empty($password_1)) {
	array_push($errors, "Password is required");
}
if ($password_1 != $password_2){
	array_push($errors, "Passwords do not match.");
}

//Check Database for Exisiting User

$user_check_query = "SELECT * FROM user WHERE Email = '$email' or Username = '$username'  LIMIT 1";

$result = mysqli_query($db, $user_check_query);

$user = mysqli_fetch_assoc($result);

if($user){
	if($user["Email"] === $email){
		array_push($errors, "Email already exists");
	}
	if($user["Username"] === $username){
		array_push($errors, "Username already exists");
	}
}

//Register without error

if(count($errors) == 0){
	$password = $password_1;
	$query = "INSERT INTO user(Email, Username, Password) VALUES ('$email', '$username', '$password')";

	mysqli_query($db, $query);
	$_SESSION['$username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location: landing_page.php');
	}

}

//Login User

if(isset($_POST['login_user'])){

	$username = mysqli_real_escape_string($db, $_POST["username"]);

	$password = mysqli_real_escape_string($db, $_POST["password_1"]);

	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}
	if(count($errors) == 0){
		$password = md5($password);

		$query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";

		$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)){

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in successfully";
			header('location: landing_page.php');
		}else{
			array_push($errors, "Wrong username or password!");
		}
	}
}


?>