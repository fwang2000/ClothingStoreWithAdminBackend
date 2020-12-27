<?php ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/womensheet.css">
	<title>Avant I - Womens</title>
	<script type="text/javascript" src="../js/clothes_pages.js"></script>
</head>
<body>
	<div class='top'>
		<span id='home'><a href="../site.php">AI</a></span>
		<span class="container">
			<a href="men.php">Men</a>
			<a href="kids.php">Kids</a>
			<a href="account.php"><img src="./images/account.png" width="36" height="36"></a>
			<a href="cart.php"><img src="./images/cart.png" width="28" height="28"></a>
		</span>
	</div>
	<div id='showcase'>
		<p class="s_text">
			<span id='collection'>2020 SUMMER COLLECTION</span>
			<br>
			<span id='title'>Presented by AVANT I WOMEN</span>
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
				<div class='clothing' id="dress"></div>
				<p class="itemtitle">Cr&ecirc;ped Cotton Dress</p>
				<p class="price">$34.99</p>
			</div>
			<div>
				<div class='clothing' id="vest"></div>
				<p class="itemtitle">Rib-Knit Sweater Vest</p>
				<p class="price">$29.99</p>
			</div>
			<div>
				<div class='clothing' id="crop"></div>
				<p class="itemtitle">Anime Cropped Tee</p>
				<p class="price">$10.99</p>
			</div>
			<div></div>
		</div>
		<div class="tab" id="bottoms">
			<div></div>
			<div>
				<div class='clothing' id="wideleg"></div>
				<p class="itemtitle">Dark Grey Wide-Leg Pants</p>
				<p class="price">$21.99</p>
			</div>
			<div>
				<div class='clothing' id="skirt"></div>
				<p class="itemtitle">White Midi Wrap Skirt</p>
				<p class="price">$15.99</p>
			</div>
			<div>
				<div class='clothing' id="sweatpants"></div>
				<p class="itemtitle">Grey Sweatpants</p>
				<p class="price">$16.99</p>
			</div>
		</div>
		<div class="tab" id="accessories">
			<div></div>
			<div>
				<div class='clothing' id="bracelet"></div>
				<p class="itemtitle">Minimalist Bracelet</p>
				<p class="price">$5.99</p>
			</div>
			<div>
				<div class='clothing' id='shoes'></div>
				<p class="itemtitle">Converse Shoes</p>
				<p class="price">$39.95</p>
			</div>
			<div>
				<div class='clothing' id='bag'></div>
				<p class="itemtitle">Black Makeup Bag</p>
				<p class="price">$12.99</p>
			</div>
		</div>
	</div>
	<div id="end">
		Additional Items On Their Way...
	</div>
</body>
</html>