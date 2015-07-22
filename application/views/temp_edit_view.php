<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php $categories = $this->session->userdata('categories');?>
	<?php $product = $this->session->userdata('product_to_edit'); var_dump($product); ?>
	<?php $url = '/edit_item/' . $product[0]['product_id'] ?>
	<form action= <?= $url ?> method="post">
		<label>Name <input type="text" name="name" placeholder = <?= '"' . $product[0]['name'] .'"' ?> ></label>
		<label>Description: <textarea name="description" placeholder = <?= '"' . $product[0]['description'] .'"' ?> ></textarea></label>
		<label>Categories: 
			<select name="categories">
				<?php foreach ($categories as $category) { ?>
					<option value=<?= '"' . $category['category'] .'"' ?>> <?= $category['category'] ?> </option>
				<?php } ?>
			</select>
		</label> <!-- this will have existing categories in a select/option menu -->
		<label>or add new category: <input type="text" name="add_category"></label> <!-- This will give you the option to choose a new category, which will be etered in the db -->
		<label>Price: <input type="text" name="price" placeholder = <?= '"' . $product[0]['price'] .'"' ?> ></label>
		<label>Current Image: <img src= <?= '"/assets/' . $product[0]['image'] . '"' ?> height = '100' width ='150' ></label>
		<label>Upload Image: <input type="file" name="image"></label>
		<input type="submit" value="add item">
	</form>
</body>
</html>