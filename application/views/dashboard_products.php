<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset = 'UTF=8'>
	<title>Dashboard Orders</title>
</head>
<body>
	<div>  <!-- This is topnav -->
		<a href="/">Dashboard</a>
		<a href="/">Orders</a>
		<a href="/">Products</a>
		<a href="/">Log Off</a>
	</div>
	<form action="" method=""> <!-- This is a search field where admins can search for products or id's or whatever we want her/him to be able to search -->
	<!-- I think the searching and sorting may ultimately be done with ajax/api -->
		<input type="search" name="search" placeholder="search">
		<input type="submit" name="submit" value="search">
	</form>
	<button>Add new Product</button> <!-- This links to the add product page -->
	<table>
		<tr> <!-- This is the tr for the column names only -->
			<th>
				Picture
			</th>
			<th>
				ID
			</th>
			<th>
				Name
			</th>
			<th>
				Inventory Count
			</th>
			<th>
				Quantity Sold
			</th>
			<th>
				Action
			</th>
		</tr>
		<?php $products = $this->session->userdata('all_products') ?> <!-- LUKE: resize images -->
		<?php foreach ($products as $product ) { ?>
			<tr>
				<td>
					<img src= <?php echo '"assets/' . $product['image'] . '"' ?> height = '100' width ='150' >
				</td>
				<td>
					<?= $product['product_id'] ?>
				</td>
				<td>
					<?= $product['name'] ?>
				</td>
				<td>
					<?= $product['inventory_count'] ?>
				</td>
				<td>
					<?= $product['quantity_sold'] ?>
				</td>
				<td>
					<?php $url = '/edit/' . $product['product_id'] ?>
					<a href= <?= $url ?>>edit</a>
					<a href="/">delete</a>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<td>
				test
			</td>
			<td>
				12
			</td>
			<td>
				T-shirt
			</td>
			<td>
				500
			</td>
			<td>
				2000
			</td>
			<td>
				<a href="/">edit</a>
				<a href="/">delete</a>
			</td>
		</tr>
	</table>
	<div> <!-- this div is the set of links to other pages of orders it should automatically generate the correct number of pages with an option to go to first and last -->
		<ul>
			<li>
				<a href="/">1</a>
			</li>
			<li>
				<a href="/">2</a>
			</li>
		</ul>
	</div>
</body>
</html>