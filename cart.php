<?php
session_start();
include"conn.php";

// If the session user matches the user's session id -> show their user details.
	if (isset($_SESSION["UserID"])) {
	}
	else {
		header('Location: login.php');
	}
// If an action occured on the page.
if(isset($_GET["action"]))
{
	// If the action button was the "delete" item button.
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			// If the item that wants to be removed has the same id as they item you are removing.
			if($values["item-id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("It\'s out!")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>O2YOU - Cart</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="images/banners/favicon.png">

	<!-- Meta Data -->
	<meta charset="utf-8"/>
</head>
<body>
	<!-- Header Area -->
	<header>
		<img id="logo" src="images/banners/logo.png" alt="O2YOU">
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
	if (isset($_SESSION["UserID"])){
		?>
		<ul id="nav-right">
			<li><a href="updateprofile.php">PROFILE</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li><a href="cart.php">CART</a></li>
		</ul>
	<?php
	}
	else {
		?>
		<ul id="nav-right">
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="login.php">LOGIN</a></li>
		</ul>
		<?php
	}
	?>
	</nav>
	<!-- Cart Container -->
	<div class="cart-container">
		<!-- Cart Table -->
		<table class="cart-table">
			<!-- Row 1 - Cart Headers -->
			<tr class="cart-rows">
				<th width="5%"></th> <!-- Image Column -->
				<th width="20%" align="left">Item Name</th>
				<th width="5%">Quantity</th>
				<th width="5%">Price</th>
				<th width="5%">Total</th>
				<th width="5%" id="action-header">Action</th>
			</tr>
			<?php
			// Checks if theres a non-empty cart.
			if(!empty($_SESSION["cart"]))
			{
				$total = 0;
				// Cycles through every cart item and grab item and its details.
				foreach($_SESSION["cart"] as $keys => $values)
				{
			?>
			<!-- Row 2 Onwards - Cart Rows -->
			<tr class="cart-rows">
				<!-- Display each item and their details -->
				<td class="product-image"><img src="images/products/<?php echo $values["item-image"]; ?>"></td>
				<td align="left"><?php echo $values["item-name"]; ?></td>
				<td><?php echo $values["item-quantity"]; ?></td>
				<td>$ <?php echo $values["item-price"]; ?></td>
				<td>$ <?php echo number_format($values["item-quantity"] * $values["item-price"], 2);?></td>
				<td><a class="remove cart-buttons" href="cart.php?action=delete&id=<?php echo $values["item-id"]; ?>">Remove</a></td>
			</tr>
			<?php
					$total = $total + ($values["item-quantity"] * $values["item-price"]);
				}
			?>
			<!-- Final Row - Total Row -->
			<tr class="cart-rows">
				<td colspan="4" align="right">Total</td>
				<!-- Calculating the total -->
				<td align="right">$ <?php echo number_format($total, 2); ?></td>
				<td><a class="checkout cart-buttons" href="">Checkout</a></td>
			</tr>
			<?php
			}
			?>
				
		</table>
	</div>
</body>
</html>