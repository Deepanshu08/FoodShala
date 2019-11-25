<!DOCTYPE html>
<html>
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand active" href="index.php" style="font-size: 25px;">FoodShala</a>
			</div>
		</div>
	</nav>
	<br><br><br><br>

	<div class="container col-md-6 col-md-offset-3">
		<form action="files/res-authenticate.php" method="post">	
			<div class="form-group">
				<label for="email"><b>Restaurant Email</b></label>
				<input type="email" class="form-control" id="res_email" name="res_email" required/>
			</div>
			<div class="form-group">
				<label for="password"><b>Password</b></label>
				<input type="password" class="form-control" id="res_password" name="res_password" required/>
			</div>
			<button type="submit" name="resSigninBtn" class="btn btn-success">Sign in</button>
			<span>Don't have account? <a class="text-danger" href="restaurant-signup.php">Sign up</a></span>
		</form>
	</div>	
</body>
</html>