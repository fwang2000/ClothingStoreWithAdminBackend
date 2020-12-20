<?php ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="kidssheet.css">
	<title>Avant I - Kids</title>
	<script type="text/javascript" src="js/clothes_pages.js"></script>
</head>
<body>
	<div class='top'>
		<span id='home'><a href="site.php">AI</a></span>
		<span class="container">
			<a href="men.php">Men</a>
			<a href="women.php">Women</a>
			<a href="account.php"><img src="./images/account2.png" width="36" height="36"></a>
			<a href="cart.php"><img src="./images/cart2.png" width="28" height="28"></a>
		</span>
	</div>
	<div id='showcase'>
		<p class="s_text">
			<span id='collection'>2020 SUMMER COLLECTION</span>
			<br>
			<span id='title'>Presented by AVANT I KIDS</span>
		</p>
	</div>
	<div id="bottom">
	</div>
	<div id="grid">
		<nav class="tabs">
		  <button class="tablink light_blue" id="m_button" onclick="openTab(event, 'girls')">Girls</button>
		  <hr class="tab_divide">
		  <button class="tablink" id="t_button" onclick="openTab(event, 'boys')">Boys</button>
		</nav>
		<div class="tab" id="girls">
			<div></div>
			<div>
				<div class='clothing' id="girlshirt"></div>
				<p class="itemtitle">White Kenzo Shirt</p>
				<p class="price">$10.99</p>
			</div>
			<div>
				<div class='clothing' id="leggings"></div>
				<p class="itemtitle">Inksplosion Leggings</p>
				<p class="price">$9.99</p>
			</div>
			<div>
				<div class='clothing' id="hat"></div>
				<p class="itemtitle">Designer Sun Hat</p>
				<p class="price">$6.99</p>
			</div>
			<div></div>
		</div>
		<div class="tab" id="boys">
			<div></div>
			<div>
				<div class='clothing' id="boyshirt"></div>
				<p class="itemtitle">Black Yukon Shirt</p>
				<p class="price">$10.99</p>
			</div>
			<div>
				<div class='clothing' id="jeans"></div>
				<p class="itemtitle">Slim-Fit Jeans</p>
				<p class="price">$29.95</p>
			</div>
			<div>
				<div class='clothing' id="backpack"></div>
				<p class="itemtitle">Heritage Backpack</p>
				<p class="price">$49.99</p>
			</div>
		</div>
	</div>
	<div id="end">
		Additional Items On Their Way...
	</div>
</body>
</html>