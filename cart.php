<?php
session_start();
include"conn.php";

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
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
	<div>
		<table class="cart-table">
			<tr class="cart-rows">
				<th width="5%"></th>
				<th width="20%" align="left">Item Name</th>
				<th width="10%">Quantity</th>
				<th width="10%">Price</th>
				<th width="10%">Total</th>
				<th width="5%">Action</th>
			</tr>
			<?php
			if(!empty($_SESSION["cart"]))
			{
				$total = 0;
				foreach($_SESSION["cart"] as $keys => $values)
				{
			?>
			<tr class="cart-rows">
				<td class="product-image"><img src="images/products/<?php echo $values["item-image"]; ?>"></td>
				<td align="left"><?php echo $values["item-name"]; ?></td>
				<td><?php echo $values["item-quantity"]; ?></td>
				<td>$ <?php echo $values["item-price"]; ?></td>
				<td>$ <?php echo number_format($values["item-quantity"] * $values["item-price"], 2);?></td>
				<td><a href="cart.php?action=delete&id=<?php echo $values["item-id"]; ?>"><span class="text-danger">Remove</span></a></td>
			</tr>
			<?php
					$total = $total + ($values["item-quantity"] * $values["item-price"]);
				}
			?>
			<tr>
				<td colspan="3" align="right">Total</td>
				<td align="right">$ <?php echo number_format($total, 2); ?></td>
				<td></td>
			</tr>
			<?php
			}
			?>
				
		</table>
	</div>
</body>
</html>