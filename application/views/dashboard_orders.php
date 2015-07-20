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
	<form>
		<!-- This is the sort-by slector -->
		<select>
			<option value="orderIn">
				Order in
			</option>
			<option value="process">
				Process
			</option>
			<option value="shipped">
				Shipped
			</option>
			<option value="cancelled">
				Cancelled
			</option>
		</select>
	</form>
	<table>
		<tr> <!-- This is the tr for the column names only -->
			<td>
				Order Id
			</td>
			<td>
				Name
			</td>
			<td>
				Date
			</td>
			<td>
				Billing Address
			</td>
			<td>
				Total
			</td>
			<td>
				Status
			</td>
		</tr>
		<tr> <!-- This is an example row -->
			<td>
				100
			</td>
			<td>
				bob
			</td>
			<td>
				12/01/66
			</td>
			<td>
				123 dojo lane, wa 98005
			</td>
			<td>
				$3 million
			</td>
			<td>
				<select value = "orderIn"> <!-- This select input is IMPORTANT. It allows the admin to change the status of the order -->
						<!-- The page will load with the select value being default-set to its actual value -->
					<option value="orderIn">
						Order in
					</option>
					<option value="process">
						Process
					</option>
					<option value="shipped">
						Shipped
					</option>
					<option value="cancelled">
						Cancelled
					</option>
				</select>
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