<!-- PHP Connection -->
<?php
session_start();
include "conn.php";
?>
<?php
// If the session user matches the user's session id -> show their user details.
	if (isset($_SESSION["UserID"])) {
	}
	else {
		header('Location: login.php');
	}
	
	$user = $_SESSION["UserID"];
	$result = $conn->query("select * from users where userID='$user'");
	// Gets the user's row and its info, and assigns each value to a session variable.
	// Session variable is then displayed in the input box as values which can then be updated.
	$row = $result->fetch_array();
	$_SESSION["firstname"] = $row['firstname'];
	$_SESSION["lastname"] = $row['lastname'];
	$_SESSION["email"] = $row['email'];
	$_SESSION["password"] = $row['password'];
	$_SESSION["address"] = $row['address'];
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>O2YOU - Registration</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="images/banners/favicon.png">
	
</head>
<body class="profile-container">
	<a href="index.php"><img id="logo" src="images/banners/logo.png" alt="O2YOU"></a>
	<!-- Update Profile Form -->
	<div class="form-container">
		<form id="update-profile" name="update-form" method="post" action="">
			<h1 class="form-title">Update Profile</h1>
			<div class="form-element"><input name="first-name" type="text" required="required" class="text-field" value="<?php echo $_SESSION["firstname"]; ?>"></div>
			<div class="form-element"><input name="last-name" type="text" required="required" class="text-field" value="<?php echo $_SESSION["lastname"]; ?>"></div>
			<div class="form-element"><input name="email" type="email" required="required" class="text-field" value="<?php echo $_SESSION["email"]; ?>"></div>
			<div class="form-element"><input name="password" type="password" required="required" class="text-field" value="<?php echo $_SESSION["password"]; ?>"></div>
			<div class="form-element"><input name="address" type="text" required="required" class="text-field" value="<?php echo $_SESSION["address"]; ?>"></div>
			<p class="error"><?php
				// If the update profile button is pressed.
				if (isset($_POST['update-profile'])) {
					
					// Assigns whatever was in the input boxes regardless if they updated or not to a variable.
					$id = $row['userID'];
					$updatefirstname = $_POST['first-name'];
					$updatelastname = $_POST['last-name'];
					$updateemail = $_POST['email'];
					$updatepassword = $_POST['password'];
					$updateaddress = $_POST['address'];
					
					// Variables are then inserted into the database row for the user.
					$data = $conn->query("UPDATE users SET firstname = '$updatefirstname', lastname = '$updatelastname', email = '$updateemail', password = '$updatepassword', address = '$updateaddress' where userID = $user");
					// Checks if the data is true. If it isn't, there is a problem with the query.
					if ($data) { ?>
					<p class="success"><?php
						echo "Profile details were successfully updated!"; ?>
					</p>
					<script>window.location = "updateprofile.php";</script>
					<?php
					}
					else {
						echo "Profile details did not successfully update!";
					}
				}
				?>
			</p>
			<div class="form-element"><input name="update-profile" type="submit" class="button" value="UPDATE PROFILE"></div>
		</form>
</div>
</body>
</html>