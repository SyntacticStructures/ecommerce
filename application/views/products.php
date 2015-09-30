<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>La Mode</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/products_css/style.css"); ?>" />
	<meta name=viewport content='width=700'>
	<script>
		$(document).ready(function(){
			$('.sidebar_text').click(function(){
				// href="/Clients/show_products/0"
				var id = $(this).attr('id');
				var title_text = $(this).text();
				$.get('/Clients/show_products/' + id , function(res){
					$('#ajax').html(res);
					$('#ajax_title').text(title_text);
					console.log(title_text);
					$('.header_image').hide();
				})
			})
		})
	</script>
</head>
<!-- calculate cart quantity -->
<?php 
	/*This will give us the cart count*/
	$quantity = 0;
	if($this->session->userdata('cart') !== null){
		$carts = $this->session->userdata('cart');
		foreach ($carts as $cart) {
			$quantity += $cart['quantity'];
		}
	}	
  ?>
		<!-- Load images here -->
		<?php $images = $this->session->userdata('images'); ?>
<body  class = "container">
	<div class = "container">
		<div class = "header">
			<h1 class = "header_text"><a class = "header_link" href="/">LA MODE</a></h1>
		<div class = "sidebar">
			<!-- LIST FOR NAV BAR -->
			<ul class = "list">
				<li class = "listitem"><a class = "sidebar_text" id="0" >ALL PRODUCTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" id="27">TOPS</a></li>
				<li class = "listitem"><a class = "sidebar_text" id="10">SHOES</a></li>
				<li class = "listitem"><a class = "sidebar_text" id="29">SHORTS / SKIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" id="28">DRESSES</a></li>
				<li class = "listitem"><a class = "sidebar_text" id="31">JEWELRY</a></li>
				<!-- ECHO OUT FROM DATABASE HOW MANY ITEMS IN THE CART -->
				<li class = "lastitem"><a class = "sidebar_text" href="/Clients/show_orders">SHOPPING CART (<?= $quantity ?>)</a></li>
			</ul>
			<!-- SEARCH BAR -->
			<input type = "text" placeholder = "SEARCH" class = "search">
		</div>
		<!-- HEADER IMAGE -->
		<div class = "header_image">
			<img src="http://www.martaphotographer.com/wp-content/uploads/2012/05/052.jpg" class = "image" height="647" width="970" align="middle">
		</div>
		<div id = "ajax">
			<!-- FEATURED PRODUCTS -->
			<h3>FEATURED PRODUCTS</h3>
			<?php foreach ($images as $image) { ?>
				<div class = "imgWrap">
					<!-- ECHO OUT FROM DATABASE -->
					<img src= <?php echo '"assets/' . $image['image'] . '"' ?> height = "382" width = "326">
					<!-- ECHO OUT FROM DATABASE INSTEAD OF DUMMY DATA -->
					<!-- THE LINK GOES TO THE PRODUCT PAGE -->
					<p class = "imgDescription"><a class="link" href=<?php echo '"/Clients/show/' . $image['product_id'] . '"' ?> ><?= $image['name'] ?>/ Price: <?= '$' . $image['price']/100 . '.' . $image['price']%10 . $image['price']%100 ?></a></p>
				</div>
			<?php } ?>
			<!-- to HERE... -->		
		</div>
	</div>
</body>
</html>