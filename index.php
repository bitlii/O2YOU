<!-- PHP Connection -->
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "o2you");
	
if(isset($_POST["add-to-cart"])) {
	if(isset($_SESSION['cart'])) {
		$itemarrayid = array_column($_SESSION["cart"], "item-id");
		if(!in_array($_GET["id"], $itemarrayid)) {
			$count = count($_SESSION["cart"]);
			$itemarray = array(
				'item-id'			=>	$_GET["id"],
				'item-name'			=>	$_POST["hidden-name"],
				'item-price'		=>	$_POST["hidden-price"],
				'item-quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $itemarray;	
		}
		else {
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else {
		$itemarray = array(
			'item-id' 			=> $_GET["id"],
			'item-name' 		=> $_POST["hidden-name"],
			'item-price' 		=> $_POST["hidden-price"],
			'item-quantity' 	=> $_POST["quantity"]
		);
		$_SESSION['cart'][0] = $itemarray;
	}
}
?>

<html lang="en">
<head>
	<title>O2YOU - The number one marketplace for your oxygen needs</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- Meta Data -->
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
		<?php
			$query = "SELECT * FROM products WHERE producttype = 'Jar' ORDER BY productID ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<input type="number" name="quantity" value="1"/>
					<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
					<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
					<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
				</div>
			</form>
		<?php
				}
			}
		?>
		</div>
		
		<!-- BOXES -->
		<h2 id="boxes">The O2Box - Amazing party essential at an affordable price!</h2>
		<div class="products">
		<?php
			$query = "SELECT * FROM products WHERE producttype = 'Box' ORDER BY productID ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<input type="number" name="quantity" value="1"/>
					<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
					<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
					<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
				</div>
			</form>
		<?php
				}
			}
		?>
		</div>
		
		
		<!-- ACCESSORIES -->
		<h2 id="accessories">Accessories - Improve your breathing game with these amazing products!</h2>
		<div class="products">
		<?php
			$query = "SELECT * FROM products WHERE producttype = 'Mask' OR producttype = 'Lifestyle' OR producttype = 'Tank'ORDER BY productID ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<input type="number" name="quantity" value="1"/>
					<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
					<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
					<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
				</div>
			</form>
		<?php
				}
			}
		?>
		</div>
		
	</main>
</body>
</html>