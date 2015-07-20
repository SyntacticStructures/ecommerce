<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	</style>
</head>
<body>
	<div><!-- This is topnav -->
		<h1>Dojo eCommerce</h1>
		<a>Shopping Cart <?php //add number in php?></a>
	</div>
<div id="container">
		<div>
			<form><!-- needs action and method -->
				<input type="search" name="search" placeholder="product name"> <!-- we may need to change this to a text input and add a submit input -->
			</form>
			<p>Categorgies</p>
			<a href="">Shirts</a>
			<a href="">Shoes</a>
			<a href="">Shorts/Skirts</a>
			<a href="">Dresses</a>
			<a href="">Jewlery</a>
			<a href="">Show all!!</a>
		</div>
		<div>
			<h4>Title</h4>
			<!-- add in pictures and links to product pages -->
			<ul><!-- here are the links to all the pages of products -->
				<li>
					<a href="/">1</a><!-- example links -->
					<a href="/">2</a>
				</li>
			</ul>
		</div>
</div>

</body>
</html>