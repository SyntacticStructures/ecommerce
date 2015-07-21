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
</head>
<body  class = "container">
	<div class = "container">
		<div class = "header">
			<h1 class = "header_text">LA MODE</h1>
		<div class = "sidebar">
			<!-- LIST FOR NAV BAR -->
			<ul class = "list">
				<li class = "listitem"><a class = "sidebar_text" href="">ALL PRODUCTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHOES</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHORTS / SKIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">DRESSES</a></li>
				<li class = "lastitem"><a class = "sidebar_text" href="">JEWELRY</a></li>
			</ul>
			<!-- SEARCH BAR -->
			<input type = "text" placeholder = "SEARCH" class = "search">
			<!-- SHOPPING CART -->
			<p class = "shoppingcart_text"><a class = "shoppingcart_text" href="">SHOPPING CART (5)</a></p>
		</div>
		<!-- HEADER IMAGE -->
		<div class = "header_image">
			<img src="http://www.martaphotographer.com/wp-content/uploads/2012/05/052.jpg" height="719" width="1078" align="middle">
		</div>
		<!-- FEATURED PRODUCTS -->
			<h2>FEATURED PRODUCTS</h2>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00173198-01.jpg" title="this is a product">
			<p class = "imgDescription"><a class="link" href="">Dress / Price: $49.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00167116-02.jpg">
			<p class = "imgDescription"><a class="link" href="">Pull Over Sweater / Price: $16.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00172401-02.jpg">
			<p class = "imgDescription"><a class="link" href="">Watch / Price: $29.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00077350-01.jpg">
			<p class = "imgDescription"><a class="link" href="">Purse / Price: $17.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00131473-01.jpg">
			<p class = "imgDescription"><a class="link" href="">Sneakers / Price: $9.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/73106027-04.jpg">
			<p class = "imgDescription"><a  class="link"href="">Keds® / Price: $12.99</a></p>
		</div>
		<div class = "imgWrap">
			<img src="http://www.forever21.com/images/default_330/00075938-10.jpg">
			<p class = "imgDescription"><a class="link" href="">Beanie / Price: $4.99</a></p>
		</div>
	</div>
</body>
</html>