<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adminstrative Login</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/style.css"); ?>" />
</head>
<body class="background">
<div class="container">
<<<<<<< HEAD
	<?= $this->session->flashdata('errors'); ?>
=======
>>>>>>> origin/Luke
    <div class="row">
        <div id="login" class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 id = "header" class="text-center login-title">Admin Login</h1>
            <div class="account-wall">
<<<<<<< HEAD
                <form action = "login" method="post" class="form-signin">
	                <input type="text" class="form-control" placeholder="Email" name='email' required autofocus>
	                <input type="password" class="form-control" placeholder="Password" name="password" required>
	                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
=======
                <form class="form-signin">
	                <input type="text" class="form-control" placeholder="Email" required autofocus>
	                <input type="password" class="form-control" placeholder="Password" required>
	                <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="text">Login</span></button>
>>>>>>> origin/Luke
              	</form>
    		</div>
		</div>
	</div>
</div>
</body>
</html>