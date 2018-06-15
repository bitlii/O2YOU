<html lang="en">
<head>
	<title>O2YOU - Cart</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- Meta Data -->
	<meta charset="utf-8"/>
</head>
<body>
	<!-- Header Area -->
	<header>
		<h1>O<sub>2</sub>YOU <span id="slogan">The only oxygen you will ever need</span></h1>
	</header>

	<!-- Navigation Bar -->
	<nav>
		<ul id="nav-left">
			<li class="current"><a href="">HOME</a></li>
			<li><a href="index.php#jars">JARS</a></li>
			<li><a href="index.php#boxes">BOXES</a></li>
			<li><a href="index.php#accessories">ACCESSORIES</a></li>
		</ul>
	<?php
	if (isset($_SESSION["UserID"])){
		?>
		<ul id="nav-right">
			<li><a href="updateprofile.php">PROFILE</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li class="cart"><a href="cart.php">CART</a></li>
		</ul>
	<?php
	}
	else {
		?>
		<ul id="nav-right">
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li class="cart"><a href="cart.php">CART</a></li>
		</ul>
		<?php
	}
	?>
	</nav>
</body>
</html>