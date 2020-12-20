<?php
	session_start();

	if (isset($_SESSION['row'])) {

		header("Location: ./admin_page.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_login_sheet.css?v=<?php echo time(); ?>">
	<title>Administration Login Page</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="logo">
			<div class="header">
			Avant <span id="i">I</span>
			</div>
			<img src="./images/user.png" width="118" height="128">
		</div>
		<div class="login">
			<form action="includes/login.php" method="post" autocomplete="off">
				<h1>Admin Login</h1>
				<input type="text" id="fname" name="fname" placeholder="First Name"><br>		
				<input type="text" id="lname" name="lname" placeholder="Last Name"> <br>
				<input type="text" id="emp_id" name="empid" minlength="3" placeholder="Employee ID"><br>
				<input type="password" id="password" name="password" placeholder="Password"><br>
				<input type="submit" name="login-submit" value="Login">
				<button>Forgot Password</button>
			</form>
		</div>
	</div>
</body>
</html>