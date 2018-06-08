<?php
session_start();
include"conn.php";
?>
<?php
if (isset($_POST['sign-up'])) {

	$fname = $_POST['first-name'];
	$lname = $_POST['last-name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$confirmpassword = $_POST['confirm-password'];
}
?>

<!doctype html>
<html lang="en">
<head>
	<title>O2YOU - Registration</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body class="registration-container">
	<h1 class="title"><a href="index.php">O2YOU</a></h1>
	<div class="form-container">
		<form id="registration"	name="registration-form" method="post" action="" enctype="multipart/formdata">
			<h1 class="form-title">Registration</h1>
			<div class="form-element"><input name="first-name" type="text" required="required" class="text-field" placeholder="First Name"></div>
			<div class="form-element"><input name="last-name" type="text" required="required" class="text-field" placeholder="Last Name"></div>
			<div class="form-element"><input name="email" type="text" required="required" class="text-field" placeholder="Email"></div>
			<div class="form-element"><input name="address" type="text" required="required" class="text-field" placeholder="Address"></div>
			<div class="form-element"><input name="password" type="text" required="required" class="text-field" placeholder="Password"></div>
			<div class="form-element"><input name="confirm-password" type="text" required="required" class="text-field" placeholder="Confirm Password"></div>
			<p class="error"><?php
				if (isset($_POST['sign-up'])) {
					if ($password === $confirmpassword) {
						$sql = $conn->query("INSERT INTO users (firstname, lastname, email, password, address) Values('$fname','$lname', '$email', '$password', '$address')");
						header('Location: login.php');
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