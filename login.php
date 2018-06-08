<?php
session_start();
include"conn.php";
?>
<?php
if (isset($_POST['log-in'])) {
	$loginemail = $_POST['email'];
	$loginpassword = $_POST['password'];
	$result = $conn->query("select * from users where email='$loginemail' and password='$loginpassword'");
	$row = $result->fetch_array();
	
	$email = $row['email'];
	$password = $row['password'];
	$id = $row['userID'];
	
	$_SESSION['UserID'] = $row['userID'];
}
?>
	
<!doctype html>
<html lang="en">
<head>
	<title>O2YOU - Login</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body class="login-container">
	<h1 class="title"><a href="index.php">O2YOU</a></h1>
	<div class="form-container">
		<form id="login" name="login-form" method="post" action="">
			<h1 class="form-title">Login</h1>
			<div class="form-element"><input name="email" type="text" required="required" class="text-field" placeholder="Email"></div>
			<div class="form-element"><input name="password" type="text" required="required" class="text-field" placeholder="Password"></div>
			<p class="error"><?php
			if (isset($_POST['log-in'])) {
				if($loginemail===$email && $loginpassword===$password) {
				?>
					<script>window.location = "index.php?id=<?php echo $id;?>";</script>
				<?php
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