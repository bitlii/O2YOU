<?php
session_start();
include "conn.php";
?>
<?php
	if (isset($_SESSION["User-ID"])) {
	}
	else {
		header('Location: login.php');
	}

	$User = $_SESSION["User-ID"];
	$result = $conn->query("select * from users where user-ID='$User'");
	$row = $result->fetch_array();
	$_SESSION["FirstName"] = $row['firstName'];
	$_SESSION["LastName"] = $row['lastName'];
	$_SESSION["Email"] = $row['email'];
	$_SESSION["Password"] = $row['password'];
	$_SESSION["Address"] = $row['address'];
?>

<!doctype html>
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
			<div class="form-element"><input name="first-name" type="text" required="required" class="text-field" value="<?php echo $_SESSION["FirstName"]; ?>"></div>
			<div class="form-element"><input name="last-name" type="text" required="required" class="text-field" value="<?php echo $_SESSION["LastName"]; ?>"></div>
			<div class="form-element"><input name="email" type="text" required="required" class="text-field" value="<?php echo $_SESSION["Email"]; ?>"></div>
			<div class="form-element"><input name="password" type="text" required="required" class="text-field" value="<?php echo $_SESSION["Password"]; ?>"></div>
			<div class="form-element"><input name="address" type="text" required="required" class="text-field" value="<?php echo $_SESSION["Address"]; ?>"></div>
			<p class="error"><?php
				if (isset($_POST['update-profile'])) {
					$id = $row['userID'];
					$UpdateFirstName = $_POST['first-name'];
					$UpdateLastName = $_POST['last-name'];
					$UpdateEmail = $_POST['email'];
					$UpdatePassword = $_POST['password'];
					$UpdateAddress = $_POST['adress'];
			
					$data = $conn->query("UPDATE users SET firstName = '$UpdateFirstName', lastName = '$UpdateLastName', email = '$UpdateEmail', password = '$UpdatePassword', address = '$UpdateAddress' where userID = $User");
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