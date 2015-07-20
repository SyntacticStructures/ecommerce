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
			<td>
				Picture
			</td>
			<td>
				ID
			</td>
			<td>
				Name
			</td>
			<td>
				Inventory Count
			</td>
			<td>
				Quantity Sold
			</td>
			<td>
				Action
			</td>
		</tr>
		<tr> <!-- This is an example row -->
			<td>
				Pic
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