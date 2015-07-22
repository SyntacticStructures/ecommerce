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
<<<<<<< HEAD
				<li class = "lastitem"><a class = "sidebar_text" href="">JEWELRY</a></li>
			</ul>
			<!-- SEARCH BAR -->
			<input type = "text" placeholder = "SEARCH" class = "search">
			<!-- SHOPPING CART -->
			<!-- ECHO OUT FROM DATABASE HOW MANY ITEMS IN THE CART -->
			<p class = "shoppingcart_text"><a class = "shoppingcart_text" href="">SHOPPING CART (5)</a></p>
		</div>
		<!-- HEADER IMAGE -->
		<div class = "header_image">
			<img src="http://www.martaphotographer.com/wp-content/uploads/2012/05/052.jpg" height="719" width="1078" align="middle">
		</div>
		<!-- FEATURED PRODUCTS -->
			<h2>FEATURED PRODUCTS</h2>
			<!-- make a NEW DIV FOREACH ... from HERE... -->
		<div class = "imgWrap">
			<!-- ECHO OUT FROM DATABASE -->
			<img src="http://www.forever21.com/images/default_330/00173198-01.jpg">
=======
				<li class = "listitem"><a class = "sidebar_text" href="">JEWELRY</a></li>
				<!-- ECHO OUT FROM DATABASE HOW MANY ITEMS IN THE CART -->
				<li class = "lastitem"><a class = "sidebar_text" href="">SHOPPING CART (5)</a></li>
			</ul>
			<!-- SEARCH BAR -->
			<input type = "text" placeholder = "SEARCH" class = "search">
		</div>
		<!-- HEADER IMAGE -->
		<div class = "header_image">
			<img src="http://www.martaphotographer.com/wp-content/uploads/2012/05/052.jpg" class = "image" height="647" width="970" align="middle">
		</div>
		<!-- FEATURED PRODUCTS -->
			<h3>FEATURED PRODUCTS</h3>
			<!-- make a NEW DIV FOREACH ... from HERE... -->
		<div class = "imgWrap">
			<!-- ECHO OUT FROM DATABASE -->
			<img src="<?php echo base_url("assets/images/new_94_783_8420_041_55.jpeg"); ?>" height = "533" width = "320">
>>>>>>> origin/Luke
			<!-- ECHO OUT FROM DATABASE INSTEAD OF DUMMY DATA -->
			<!-- THE LINK GOES TO THE PRODUCT PAGE -->
			<p class = "imgDescription"><a class="link" href="">Dress / Price: $49.99</a></p>
		</div>
		<!-- to HERE... -->
	</div>
</body>
</html>