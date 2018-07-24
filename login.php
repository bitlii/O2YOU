<?php
session_start();
include"conn.php";

// When the login button is pressed -> grabs inputted info, assigns it to a variable & checks with table rows if it's in database.
if (isset($_POST['log-in'])) {
	// Assigns the inputted info to a variable
	$loginemail = $_POST['email'];
	$loginpassword = $_POST['password'];
	// Query to check if the email and password are present in the database table.
	$result = $conn->query("select * from users where email='$loginemail' and password='$loginpassword'");
	$row = $result->fetch_array();
	
	$email = $row['email'];
	$password = $row['password'];
	$id = $row['userID'];
	
	$_SESSION['UserID'] = $row['userID'];
	$_SESSION['FirstName'] = $row['firstname'];
}
?>
<html lang="en">
<head>
	<title>O2YOU - Login</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="images/banners/favicon.png">
	
</head>
<body class="login-container">
	<!-- Main Login Container -->
	<a href="index.php"><img id="logo" src="images/banners/logo.png" alt="O2YOU"></a>
	<div class="form-container">
		<!-- Login Form -->
		<form id="login" name="login-form" method="post" action="">
			<h1 class="form-title">Login</h1>
			<div class="form-element"><input name="email" type="email" required="required" class="text-field" placeholder="Email"></div>
			<div class="form-element"><input name="password" type="password" required="required" class="text-field" placeholder="Password"></div>
			<p class="error"><?php
			// Checks if inputted login/password matches to an entry in the db.
			if (isset($_POST['log-in'])) {
				if($loginemail===$email && $loginpassword===$password) {
				?>
					<script>window.location = "index.php?id=<?php echo $id;?>";</script>
				<?php
				// If it does not match ie: wrong email/password, tell them that it's invalid.
				} else {
					echo "Invalid Login!";
				}
			}
			?></p>
			<div class="form-element"><input name="log-in" type="submit" class="button" value="LOG IN"></div>
			<p class="message">Don't have an account? <a href="registration.php">Register now!</a></p>
		</form>
</div>
</body>
</html>