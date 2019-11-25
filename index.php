<!DOCTYPE html>
<html>
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		div.col-sm-3{
			margin-bottom: 20px; 
		}
		div.card-body p{
			font-size: 13px;
			margin-top: -10px;
		}
		div.res-info{
			margin-bottom: 8px;
		}
	</style>
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
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Customer
								<span class="caret"></span>
							</button>&nbsp&nbsp
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="user-login.php">Login</a></li>
								<li><a href="user-signup.php">SignUp</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item dropdown">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Restaurant
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="restaurant-login.php">Login</a></li>
								<li><a href="restaurant-signup.php">SignUp</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br><br><br>
	<div class="container">
		<?php 
		require 'files/connection.php';
		$sql = "select menu_items.*, restaurants.res_name from menu_items, restaurants where menu_items.res_id=restaurants.id";
		$result = $conn->query($sql);
		?>
		<div class="content"><br>
			<?php 
			while($row = $result->fetch_assoc()){ ?>
				<div class="col-sm-3">
					<div class="card" style="width:24rem;">
						<img class="card-img-top" src="<?php echo $row['item_imagepath']; ?>" alt="Card image" style="width:100%; height: 160px;">
						<div class="card-body">
							<h4 class="card-title"><?php echo ucwords($row['item_name']); ?></h4>
							<p class="card-text pull-right"><?php echo ucfirst($row['item_type']); ?></p>
							<p class="card-text"><?php echo ucfirst($row['item_desc']); ?></p>
							<div class="card-text res-info">Restaurant Name - <?php echo ucwords($row['res_name']) ?></div>
							<a href="javascript:void(0);" class="btn btn-sm btn-info pull-right orderBtn">Order</a>
							<div class="card-text" style="margin-top: 8px;"><?php echo 'Rs. '.$row['item_price']; ?></div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>		
	</div>
	<script type="text/javascript">
		$('.orderBtn').on('click', function(){
			alert('To order something you need to Login first!!');
		});
	</script>
</body>
</html>
