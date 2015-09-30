<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/show_css/style.css"); ?>" />
	<meta name=viewport content='width=700'>
</head>
<?php 
	/*This will give us the cart count*/
	/* woah, this needs to be on the backend */
	$quantity = 0;
	if($this->session->userdata('cart') !== null){
		$carts = $this->session->userdata('cart');
		foreach ($carts as $cart) {
			$quantity += $cart['quantity'];
		}
	}	
  ?>
<body  class = "container">
	<div class = "container">
		<div class = "header">
			<!-- ADD LINK TO VIEW products.php -->
			<h1 class = "header_text"><a class = "header_link" href="/">LA MODE</a></h1>
		<div class = "sidebar">
			<!-- LIST FOR NAV BAR -->
			<ul class = "list">
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/show_products/0">ALL PRODUCTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/show_products/27">SHIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/show_products/10">SHOES</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/show_products/29">SHORTS / SKIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/show_products/28">DRESSES</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="/Clients/destroy_session">JEWELRY</a></li>
				<!-- ECHO OUT FROM DATABASE HOW MANY ITEMS IN THE CART -->
				<li class = "lastitem"><a class = "sidebar_text" href="/Clients/show_orders">SHOPPING CART (<?= $quantity ?>)</a></li>
			</ul>
			<!-- SEARCH BAR -->
			<input type = "text" placeholder = "SEARCH" class = "search">
		</div>
		</div> 
	</div>
	<!-- ADD PRODUCT STARTS HERE ... DO NOT CHANGE ANYTHING FROM THE ABOVE -->
	<div class="center-block">
		<!-- ADD PRODUCT IMAGE -->
		<div class="img-responzive">
			<img src= <?= "'/assets/" . $image . "'" ?> >
		</div>
		<!-- ADD TITLE OF PRODUCT HERE -->
		<div class="center-block">
			<h4><?= $name ?></h4>
		<!-- ADD DESCRIPTION OF PRODUCT HERE -->
			<p><?= $description ?></p>
			<!-- select quantity you want to buy. The amount of possible purchases should come from backend and be < or = total inventory -->
			<form action="/Clients/add_to_cart/" method="post">
				<select class="opt" name="quantity"> 
					<?php for($i = 1; $i <= $inventory_count; $i++){?>
						<option value= <?= "'" . $i . "'" ?> >
							<?= $i ?> <?= money_format('$%i', ($price/100 * $i)) ?>
						</option>
						<?php }; ?>
					<input class = "btn" type="submit" name="submit" value="Add to Shopping Cart">
				</select>
				<input type="hidden" name="price" value= <?= "'" . $price . "'" ?> >
				<input type="hidden" name="id" value= <?= "'" . $product_id . "'" ?> >
				<input type="hidden" name="name" value=<?= "'" . $name . "'" ?>>
			</form>
		</div>
	</div>
</body>


