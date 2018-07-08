<!-- PHP Connection -->
<?php
session_start();
include "conn.php";
// Checks if the "add-to-cart" POST from the form was pressed.	
if(isset($_POST["add-to-cart"])) {
	// Checks if there is an existing userid session present (is the user logged in). 
	if(isset($_SESSION['UserID'])) {
		// Checks if there is an existing cart session present with items in it, if not it'll create a new cart session for the user.
		if(isset($_SESSION['cart'])) {
			// Grabs all of the item id's from the item-id column from the cart.
			$itemarrayid = array_column($_SESSION["cart"], "item-id");
			// Checks if the newly added item's id (which is grabbed from the form) is in itemarrayid (and therefore in the cart).
			if(!in_array($_GET["id"], $itemarrayid)) {
				// If it's not in the cart already, it will now count the number of items thats already in the cart.
				$count = count($_SESSION["cart"]);
				// Assigns the item details from the form to the keys of the array as the values.
				$itemarray = array(
					'item-id'			=>	$_GET["id"],
					'item-name'			=>	$_POST["hidden-name"],
					'item-price'		=>	$_POST["hidden-price"],
					'item-quantity'		=>	$_POST["quantity"]
				);
				// because arrays start at 0 (and not 1), using $count and assigning the new item to the count will actually add it to the end of the cart.
				// eg: there are 2 items in the cart, thus $count=2,
				//   : since arrays start at 0 (item 1=0, item 2=1), assigns the 3rd item at 2, will assign the item to an empty slot. 
				$_SESSION["cart"][$count] = $itemarray;	
			}
			// Item is already present in the cart.
			else {
				echo '<script>alert("Item Already Added")</script>';
			}
		}
		// A cart session with items currently do not exist.
		else {
			// Defines the array and its keys; the item details will be assigned to each of these keys.
			$itemarray = array(
				'item-id' 			=> $_GET["id"],
				'item-name' 		=> $_POST["hidden-name"],
				'item-price' 		=> $_POST["hidden-price"],
				'item-quantity' 	=> $_POST["quantity"]
			);
			// Adds the array to the start of the cart.
			$_SESSION['cart'][0] = $itemarray;
		}
	}
	// The user is not logged in. Warns the guest.
	else {
		echo '<script>alert("Please Log in to add to cart.")</script>';
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
		<?php if(isset($_SESSION['UserID'])) { ?>
		<h4 id="welcome">Welcome home, <?php echo $_SESSION["FirstName"];?></h4>
		<?php } ?>
	</header>

	<!-- Navigation Bar -->
	<nav>
		<ul id="nav-left">
			<li><a href="index.php">HOME</a></li>
			<li><a href="index.php#jars">JARS</a></li>
			<li><a href="index.php#boxes">BOXES</a></li>
			<li><a href="index.php#accessories">ACCESSORIES</a></li>
		</ul>
	<?php
	// Checks if there is a user session/ checks if the user is logged in.
	// If the user is logged in, show this nav bar.
	if (isset($_SESSION["UserID"])){
		?>
		<!-- Logged in right-side navigation bar -->
		<ul id="nav-right">
			<li><a href="updateprofile.php">PROFILE</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li><a href="cart.php">CART</a></li>
		</ul>
	<?php
	}
	// If the user is not logged in, show this nav bar.
	else {
		?>
		<!-- Not logged in right-side navigation bar -->
		<ul id="nav-right">
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="login.php">LOGIN</a></li>
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
			// SQL query is made to select all products where the type of it is a "jar", then order by the id ascending.
			$query = "SELECT * FROM products WHERE producttype = 'Jar' ORDER BY productID ASC";
			$result = mysqli_query($conn, $query);
			// Checks if the query returned any products back.
			if(mysqli_num_rows($result) > 0) {
				// Loop through every single products and its details.
				while($row = mysqli_fetch_array($result)) {
			?>
			<!-- The Product Card -->
			<!-- When the form has been submitted, the php will use the productID given in the action attribute to be used in the item adding code. -->
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<!-- echos/displays all of the details of the product row -->
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<div class="product-card-bottom">
						<input type="number" name="quantity" class="product-quantity" min="1" value="1"/>
						<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
						<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
						<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
					</div>
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
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)) {
			?>
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<div class="product-card-bottom">
						<input type="number" name="quantity" class="product-quantity" min="1" value="1"/>
						<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
						<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
						<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
					</div>
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
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)) {
			?>
			<form class="product-card" method="post" action="index.php?action=add&id=<?php echo $row["productID"]; ?>">
				<div class="product-image"><img src="images/products/<?php echo $row["productimage"]; ?>"></div>
				<div class="product-info">
					<h4><?php echo $row["productname"]; ?></h4>
					<h5>$ <?php echo $row["productprice"]; ?></h5>
					<div class="product-card-bottom">
						<input type="number" name="quantity" class="product-quantity" min="1" value="1"/>
						<input type="hidden" name="hidden-name" value="<?php echo $row["productname"]; ?>" />
						<input type="hidden" name="hidden-price" value="<?php echo $row["productprice"]; ?>" />
						<input type="submit" name="add-to-cart" class="button" value="Add to Cart" />
					</div>
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