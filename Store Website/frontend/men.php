<?php ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/mensheet.css">
	<title>Avant I - Mens</title>
	<script type="text/javascript" src="../js/clothes_pages.js"></script>
</head>
<body>
	<div class='top'>
		<span id='home'><a href="../site.php">AI</a></span>
		<span class="container">
			<a href="women.php">Women</a>
			<a href="kids.php">Kids</a>
			<a href="account.php"><img src="./images/account.png" width="36" height="36"></a>
			<a href="cart.php"><img src="./images/cart.png" width="28" height="28"></a>
		</span>
	</div>
	<div id='showcase'>
		<p class="s_text">
			<span id='collection'>2020 SUMMER COLLECTION</span>
			<br>
			<span id='title'>Presented by AVANT I MEN</span>
		</p>
	</div>
	<div id="bottom">
	</div>
	<div id="grid">
		<nav class="tabs">
		  <button class="tablink light_blue" id="m_button" onclick="openTab(event, 'tops')">Tops</button>
		  <hr class="tab_divide">
		  <button class="tablink" id="t_button" onclick="openTab(event, 'bottoms')">Bottoms</button>
		  <hr class="tab_divide">
		  <button class="tablink" id="s_button" onclick="openTab(event, 'accessories')">Accessories</button>
		</nav>
		<div class="tab" id="tops">
			<div></div>
			<div>
				<div class='clothing' id="whiteshirt"></div>
				<p class="itemtitle">White Graphic Tee</p>
				<p class="price">$19.99</p>
			</div>
			<div>
				<div class='clothing' id="blackshirt"></div>
				<p class="itemtitle">Denim Button Up Shirt</p>
				<p class="price">$27.99</p>
			</div>
			<div>
				<div class='clothing' id="purplebomber"></div>
				<p class="itemtitle">Purple Bomber Jacket</p>
				<p class="price">$35.99</p>
			</div>
			<div></div>
		</div>
		<div class="tab" id="bottoms">
			<div></div>
			<div>
				<div class='clothing' id="blueshorts"></div>
				<p class="itemtitle">Blue Stretch Volley Shorts</p>
				<p class="price">$9.99</p>
			</div>
			<div>
				<div class='clothing' id="swimtrunks"></div>
				<p class="itemtitle">Tye-Dye Swim Trunks</p>
				<p class="price">$9.99</p>
			</div>
			<div>
				<div class='clothing' id="fleecejoggers"></div>
				<p class="itemtitle">Grey Fleece Joggers</p>
				<p class="price">$16.99</p>
			</div>
		</div>
		<div class="tab" id="accessories">
			<div></div>
			<div>
				<div class='clothing' id="watch"></div>
				<p class="itemtitle">Samsung Smart Watch</p>
				<p class="price">$119.99</p>
			</div>
			<div>
				<div class='clothing' id='shoes'></div>
				<p class="itemtitle">Navy Casual Shoes</p>
				<p class="price">$39.99</p>
			</div>
			<div>
				<div class='clothing' id='sunglasses'></div>
				<p class="itemtitle">Aviator Sunglasses</p>
				<p class="price">$12.99</p>
			</div>
		</div>
	</div>
	<div id="end">
		Additional Items On Their Way...
	</div>
</body>
</html>