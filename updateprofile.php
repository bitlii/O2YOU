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
	$row = $result->fetch_array();
	$_SESSION["firstname"] = $row['firstname'];
	$_SESSION["lastname"] = $row['lastname'];
	$_SESSION["email"] = $row['email'];
	$_SESSION["password"] = $row['password'];
	$_SESSION["address"] = $row['address'];
?>
<html lang="en">
<head>
	<title>O2YOU - Registration</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body class="profile-container">
	<h1 class="title"><a href="index.php">O2YOU</a></h1>
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
					$id = $row['userID'];
					$updatefirstname = $_POST['first-name'];
					$updatelastname = $_POST['last-name'];
					$updateemail = $_POST['email'];
					$updatepassword = $_POST['password'];
					$updateaddress = $_POST['address'];
			
					$data = $conn->query("UPDATE users SET firstname = '$updatefirstname', lastname = '$updatelastname', email = '$updateemail', password = '$updatepassword', address = '$updateaddress' where userID = $user");
					if ($data) { ?>
					<p class="success"><?php
						echo "Profile details were successfully updated!"; ?>
					</p><?php
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