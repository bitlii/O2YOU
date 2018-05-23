<?php
	session_start();
	include"conn.php";
?>

<!doctype html>
<html lang="en">
<head>
	<title>O2YOU - The number one marketplace for your oxygen needs</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- META -->
	<meta charset="utf-8"/>
    <meta name="author" content="Jackie Chen"/>
    <meta name="description" content="O2YOU's is the worlds biggest oxygen marketplace with a wide selection of oxygen ready to ship at moments notice."/>
    <meta name="keywords" content="o2you, oxygen, marketplace, o2, air"/>
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
			<li><a href="index.php">LOGOFF</a></li>
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

	<!-- Promotion Banner -->
	<section>
		<div class="banner-container">
			<img class="banner" src="images/banners/oBottleProBanner.png" alt="oBottle Pro Banner">
		</div>
	</section>
	
	<!-- Product Section -->
	<main class="product-section">
		
		<!-- JARS -->
		<h2 id="jars">The classic O2Jars - Fun for the whole family.</h2>
		<div class="products">
			<div class="product-card">
				<div class="product-image"><img src="images/products/jar/jarS.jpg" alt="Small O2Jar" title="Small O2Jar"></div>
				<div class="product-info">
					<h4>Small O2Jar</h4>
					<h5>$19.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/jar/jarM.jpg" alt="Medium O2Jar" title="Medium O2Jar"></div>
				<div class="product-info">
					<h4>Medium O2Jar</h4>
					<h5>$49.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/jar/jarL.jpg" alt="Large O2Jar" title="Large O2Jar"></div>
				<div class="product-info">
					<h4>Large O2Jar</h4>
					<h5>$99.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/jar/jarJumbo.jpg" alt="Jumbo O2Jar" title="Jumbo O2Jar"></div>
				<div class="product-info">
					<h4>Jumbo O2Jar</h4>
					<h5>$169.69</h5>
				</div>
			</div>
		</div>
		
		<!-- BOXES -->
		<h2 id="boxes">The O2Box - Amazing party essential at an affordable price!</h2>
		<div class="products">
			<div class="product-card">
				<div class="product-image"><img src="images/products/box/boxS.jpg" alt="Small O2Box" title="Small O2Box"></div>
				<div class="product-info">
					<h4>Small O2Box</h4>
					<h5>$99.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/box/boxM.jpg" alt="Medium O2Box" title="Medium O2Box"></div>
				<div class="product-info">
					<h4>Medium O2Box</h4>
					<h5>$199.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/box/boxL.jpg" alt="Large O2Box" title="Large O2Box"></div>
				<div class="product-info">
					<h4>Large O2Box</h4>
					<h5>$299.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/box/boxXL.jpg" alt="XL O2Box" title="XL O2Box"></div>
				<div class="product-info">
					<h4>Extra Large O2Box</h4>
					<h5>$449.99</h5>
				</div>
			</div>	
		</div>
		
		<!-- ACCESSORIES -->
		<h2 id="accessories">Accessories - Improve your breathing game with these amazing products!</h2>
		<div class="products">
			<div class="product-card">
				<div class="product-image"><img src="images/products/accessories/o2mask.jpg" alt="O2Mask" title="O2Mask"></div>
				<div class="product-info">
					<h4>O2Mask</h4>
					<h5>$49.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/accessories/o2techmaskx.jpg" alt="O2Mask X" title="O2Mask X"></div>
				<div class="product-info">
					<h4>O2Mask X</h4>
					<h5>$999.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/accessories/o2tank.jpg" alt="O2Tank" title="O2Tank"></div>
				<div class="product-info">
					<h4>O2Tank</h4>
					<h5>$149.99</h5>
				</div>
			</div>
			<div class="product-card">
				<div class="product-image"><img src="images/products/accessories/o2backpack.jpg" alt="O2Backpack" title="O2Backpack"></div>
				<div class="product-info">
					<h4>O2Backpack</h4>
					<h5>$454.49</h5>
				</div>
			</div>
		</div>
	</main>
</body>
</html>