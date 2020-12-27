<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css?v=<?php echo time(); ?>">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
</head>
<body>

	<div class="container">
		<div class="header">
			Avant <span id="i">I</span>
		</div>
		<div class="subtitle">Established 2020</div>
		<nav class="navbar">
			<ul>
				<a href="frontend/men.php"><li> Men </li></a>
				<a href="frontend/women.php"><li> Women </li></a>
				<a href="frontend/kids.php"><li> Kids </li></a>
				<a href="frontend/account.php"><li> Account </li></a>
			</ul>
			<br>
			<a href="admin/admin_login.php" id="admin_login"> Admin Login </a>
		</nav>
	</div>
	<div class="showcase">
		<div class="item_wrapper">
			<div class="mens_feature">
				<div id="men_item"></div>
				<a href="Button_Up_Black_Shirt.php"><button class="feature_button">Quick Shop</button></a>
			</div>
			<div class="womens_feature">
				<div id="women_item"></div>
				<a href="White_Sundress.php"><button class="feature_button">Quick Shop</button></a>
			</div>
			<div id="accessory">
				<div class="acc_feature">
					<div id="acc1"></div>
					<a href="Classic_Makeup_Bag.php"><button class="feature_button">Quick Shop</button></a>
				</div>
				<div class="acc_feature">
					<div id="acc2"></div>
					<a href="Waterproof_Casual_Black_Shoes.php"><button class="feature_button">Quick Shop</button></a>
				</div>
			</div>
		</div>
	</div>

</body>
</html>