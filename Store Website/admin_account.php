<?php
	require_once 'includes/dbh.inc.php';

	session_start();
	$row = $_SESSION['row'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_account_sheet.css?v=<?php echo time(); ?>">
	<title>Account</title>
	<script type="text/javascript" src="js/admin_account.js"></script>
</head>
<body>
	<?php 
		echo "<img src='./images/user.png' width='64' height='64'>";
		echo "<div id=name>";
		echo($row['first_name'] . " " . $row['last_name']);
		echo "</div>";
	?>
	<div id="vi">
		<span>View Information</span>
		<button id="dropdown" onclick="controlInfo()"></button>
	</div>
	<div id="info">
		<?php  
		
			echo "<table>";
			echo "<tr>";
			echo "<th>Employee ID:</th>";
			echo "<th><span class='item'>{$row['emp_id']}</span></th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th>Birthday:</th>";
			echo "<th><span class='item'>{$row['birth_day']}</span></th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th>Sex:</th>";
			echo "<th><span class='item'>{$row['sex']}</span></th>";
			echo "</tr>";
			echo "<th>Salary:</th>";
			echo "<th><span class='item'>{$row['salary']}</span></th>";
			echo "</tr>";
			echo "<th>Store ID:</th>";
			echo "<th><span class='item'>{$row['store_id']}</span></th>";
			echo "</tr>";
			echo "<th>Password:</th>";
			echo "<th><span class='item'>{$row['admin_password']}</span></th>";
			echo "</tr>";
			echo "</table>";
		?>
	</div>
	<div id="pass_change">
		<span>Change Password</span>
		<button id='change_button' onclick="controlPChange()"></button>
	</div>
	<form id="pform" action="" method="post">
		New Password: 
		<input type="text" name="new_password">
		<br>
		Repeat New Password:
		<input type="text" name="password_repeat">
		<br>
		<button id="submit" type="submit" name="submit">Change Password</button>
	</form>
</body>
</html>

<?php
	
	if(isset($_REQUEST['submit']))
    {

    	$password = trim($_POST["new_password"]);
	    $p_repeat = trim($_POST["password_repeat"]);

	    if (empty($password) or empty($p_repeat)) {

	    	echo "<div class='error'>";
	    	echo("Missing Fields");
	    	echo "</div>";

	    } elseif ($password != $p_repeat) {

	    	echo "<div class='error'>";
	    	echo("Passwords do not match!");
	    	echo "</div>";
	    	
	    } else {

	    	$sql = "UPDATE employee SET admin_password = '{$password}' WHERE emp_id = {$row['emp_id']};";

	    	if (mysqli_query($conn, $sql)) {

				echo "<br>";
				echo "Password successfully changed.";
				echo "<br>";
				echo "Information will be updated on next login.";

			} 
	    }
    }