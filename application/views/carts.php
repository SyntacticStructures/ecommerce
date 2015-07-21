<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<style type="text/css">
		/*insert CSS here*/
	</style>
</head>
<body>

<div class="container">
	<div class="header">
		<h1>Dojo eCommerce</h1>
		<h2>Shopping Cart <?php //add number in php?></h2>
	</div>
	<div class="list">
		<table>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
			<tr>
				<td>
					shoe
				</td>
				<td>
					$20
				</td>
				<td>
					3 
					<a href="/">Update</a>
					<a href="/">Delete</a> <!-- Will be replaced by image of bin -->
				</td>
				<td>
					$60
				</td>
			</tr>
		</table>
		<p>Total:</p>
		<button name="continue">Continue Shopping</button>
	</div>

	<div class="completeForms">
		<h3>Shipping Information</h3>
		<form action="" method="post">
			<label>First Name: <input type="text" name="first_name"></label>
			<label>Last Name: <input type="text" name="last_name"></label>
			<label>Address: <input type="text" name="address"></label>
			<label>Address 2: <input type="text" name="address2"></label>
			<label>City: <input type="text" name="city"></label>
			<label>State: <input type="text" name="state"></label>
			<label>Zipcode: <input type="text" name="zipcode"></label>

		<h3>Billing Information</h3>
			<label>Same as shipping<input type="checkbox" name="same"></label>
			<label>First Name: <input type="text" name="bill_first_name"></label>
			<label>Last Name: <input type="text" name="bill_last_name"></label>
			<label>Address: <input type="text" name="bill_address"></label>
			<label>Address 2: <input type="text" name="bill_address2"></label>
			<label>City: <input type="text" name="bill_city"></label>
			<label>State: <input type="text" name="bill_state"></label>
			<label>Zipcode: <input type="text" name="bill_zipcode"></label>
			<label>Card: <input type="text" name="card"></label>
			<label>Security Code: <input type="text" name="securitycode"></label>
			<label>Expiration: <input type="text" name="expiration"></label>
			<label><input type="submit" value="Pay"></label>
		</form>


<!-- STRIPE -->
		<form action="" method="POST">
		  <script
		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		    data-key="pk_live_rR9bbCVimInhIcbqH65iTQGB"
		    data-amount="2000"
		    data-name="Demo Site"
		    data-description="2 widgets ($20.00)"
		    data-image="/128x128.png">
		  </script>
		</form>
<!-- END STRIPE -->

	</div>
</div>
</body>
</html>