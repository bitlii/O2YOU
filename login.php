<!doctype html>
<html>
<head>
	<title>O2YOU - Login</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body class="login-container">
	<h1 class="title"><a href="index.php"/>O2YOU</a></h1>
	<div class="form-container">
		<form id="login" name="login-form" method="post" action="" enctype="multipart/formdata">
			<h1 class="form-title">Login</h1>
			<div class="form-element"><input name="email" type="text" required="required" class="text-field" placeholder="Email"></div>
			<div class="form-element"><input name="password" type="text" required="required" class="text-field" placeholder="Password"></div>
			<div class="form-element"><input name="log-in" type="submit" class="button" value="LOG IN"></div>
			<p class="message">Don't have an account? <a href="registration.php">Register now!</a></p>
		</form>
</div>
</body>
</html>