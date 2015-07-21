<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3>Admin Login Page</h3>
<?= $this->session->flashdata('errors'); ?>
<form action="login" method="post">
	<label>Email: <input type="text" name="email"></label>
	<label>Password: <input type="password" name="password"></label>
	<input type="submit" name="submit" value="login">
</form>
</body>
</html>