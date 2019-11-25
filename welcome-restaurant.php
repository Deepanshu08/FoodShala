<?php 
require 'files/connection.php';
session_start();
error_reporting(E_ERROR | E_PARSE);

if(strlen($_SESSION['restid'])==0)
{
	header('location:restaurant-login.php');
}
else {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>FoodShala</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
					<a class="navbar-brand active" href="welcome-user.php" style="font-size: 25px;">FoodShala</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<form method="get" action="files/logout.php"> 
							<li><button name="logout" type="submit" class="btn btn-danger" style="margin-top: 10px;">Logout</button><li>
							</form>
						</ul>
					</div>
				</div>
			</nav><br><br><br>

			<div class="container">
				<div class="content col-md-8 col-md-offset-2"><br>
					<form action="files/add-item.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="item_name"><b>Item Name</b></label>
							<input type="text" class="form-control" id="item_name" name="item_name" required/>
						</div>
						<div class="form-group">
							<label for="item_name"><b>Item Image</b></label>
							<input type="file" name="item_image" class="uploader" onchange="readURL(this);" required />
							<span class="text-muted" style="font-size: 14px;">JPG, GIF or PNG.</span>
						</div>
						<div class="form-group">
							<label for="item_desc"><b>Item Description</b></label>
							<input type="text" class="form-control" id="item_desc" name="item_desc" required/>
						</div>
						<div class="form-group">
							<label for="item_type"><b>Item Type</b>&nbsp;</label>
							<input type="radio" name="item_type" value="non-veg" required> Non-Veg &nbsp;
							<input type="radio" name="item_type" value="veg" required> Veg
						</div>
						<div class="form-group">
							<label for="item_price"><b>Item Price</b></label>
							<input type="text" class="form-control" id="item_price" name="item_price" required/>
						</div>
						<div class="form-group">
							<button type="submit" name="addItemBtn" class="btn btn-success">Add Item</button>
						</div>
					</form>
				</div>
			</div>

			<script type="text/javascript">

				function readURL(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
							$('#profileImg')
							.attr('src', e.target.result);
						};

						reader.readAsDataURL(input.files[0]);
					}
				}
			</script>

		</body>
		</html>
		<?php } ?>