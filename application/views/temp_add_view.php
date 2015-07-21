<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<label>Name <input type="text" name="name"></label>
		<label>Description: <textarea name="description"></textarea></label>
		<label>Categories: <input type="text" name="category"></label> <!-- this will have existing categories in a select/option menu -->
		<label>or add new category<input type="text"></label> <!-- This will give you the option to choose a new category, which will be etered in the db -->
		<label>Upload Image: <input type="file" name="image"></label>
		<input type="submit" value="add item">
	</form>
</body>
</html>