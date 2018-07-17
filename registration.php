<?php
session_start();
include"conn.php";
?>
<?php
// If sign up button is pressed -> assign inputted data as variables to insert into db (below)
if (isset($_POST['sign-up'])) {
	
	$fname = $_POST['first-name'];
	$lname = $_POST['last-name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$confirmpassword = $_POST['confirm-password'];
}
?>
<html lang="en">
<head>
	<title>O2YOU - Registration</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="images/banners/favicon.png">
	
</head>
<body class="registration-container">
	<!-- Main Registration Container -->
	<h1 class="title"><a href="index.php">O2YOU</a></h1>
	<div class="form-container">
		<form id="registration"	name="registration-form" method="post" action="" enctype="multipart/formdata">
			<h1 class="form-title">Registration</h1>
			<div class="form-element"><input name="first-name" type="text" required="required" class="text-field" placeholder="First Name"></div>
			<div class="form-element"><input name="last-name" type="text" required="required" class="text-field" placeholder="Last Name"></div>
			<div class="form-element"><input name="email" type="email" required="required" class="text-field" placeholder="Email"></div>
			<div class="form-element"><input name="address" type="text" required="required" class="text-field" placeholder="Address"></div>
			<div class="form-element"><input name="password" type="password" required="required" class="text-field" placeholder="Password"></div>
			<div class="form-element"><input name="confirm-password" type="password" required="required" class="text-field" placeholder="Confirm Password"></div>
			<p class="error"><?php
				// If the sign up button is pressed -> insert all the info into the db on a new row when password and confirm password match.
				if (isset($_POST['sign-up'])) {
					if ($password === $confirmpassword) {
						$sql = $conn->query("INSERT INTO users (firstname, lastname, email, password, address) Values('$fname','$lname', '$email', '$password', '$address')");
						header('Location: login.php');
					// If the confirm password and initial password input != match.
					} else {
						echo "Passwords do not match!";
					}
				}?></p>
			<div class="form-element"><input name="sign-up" type="submit" class="button" value="SIGN UP"></div>
			<p class="message">Already have an account? <a href="login.php">Login now!</a></p>
		</form>
</div>
</body>
</html>