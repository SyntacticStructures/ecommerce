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
			<ul class = "list">
				<li class = "listitem"><a class = "sidebar_text" href="">ALL PRODUCTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHOES</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">SHORTS / SKIRTS</a></li>
				<li class = "listitem"><a class = "sidebar_text" href="">DRESSES</a></li>
				<li class = "lastitem"><a class = "sidebar_text" href="">JEWELRY</a></li>
			</ul>
				<input type = "text" placeholder = "SEARCH" class = "search">
				<p class = "shoppingcart_text"><a class = "shoppingcart_text" href="">SHOPPING CART (5)</a></p>
		</div>
		<div class = "header_image">
			<img src="http://www.martaphotographer.com/wp-content/uploads/2012/05/052.jpg" height="719" width="1078" align="middle">
		</div>
		<!-- FEATURED PRODUCTS -->
	</div>
</body>
</html>