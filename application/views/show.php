<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<style type="text/css">
		/*insert CSS here and here*/
	</style>
</head>
<body>
<div>
	<div>
		<h1>Dojo eCommerce</h1>
		<h2>Shopping Cart <?php //add number in php?></h2>
	</div>
	<a href="/">Go Back</a>
	<div> <!-- This is the image box area -->
		<img src=""> <!-- image of product -->
	</div>

	<div> <!-- This is the image box area of the other angles-->
		<img src=""> <!-- image of product from angle 2-->
		<img src=""> <!-- image of product from angle 3-->
		<img src=""> <!-- image of product from angle 4-->
		<img src=""> <!-- image of product from angle 5-->
		<img src=""> <!-- image of product from angle 6-->
	</div>

	<div> <!-- description box -->
		<p>description</p>
		<form> <!-- needs action and method -->
			<select name="quantity"> <!-- select quantity you want to buy. The amount of possible purchases should come from backend and be < or = total inventory -->
				<option value="1">
					1... price
				</option>
				<option>
					2... price*2
				</option value="2">
				<input type="submit" name="submit" value="Buy">
			</select>
		</form>
	</div>
	<div>
		<p>Similar Items</p>
		<ul> <!-- display images of similar items (random items from same cateogry) -->
			<li>
				item image
				<img src="">
			</li>
			<li>
				item image
				<img src="">
			</li>
			<li>
				item image
				<img src="">
			</li>
		</ul>
	</div>
</div>
</body>