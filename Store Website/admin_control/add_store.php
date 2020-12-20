<?php
	require_once '../includes/dbh.inc.php';

	session_start();
	$row = $_SESSION['row'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="control_sheet.css">
	<title></title>
</head>
<body>
	<form action="" autocomplete="off" method="post" >
		<p>Store Name:
		<input type="text" name='name'></p>
		<hr>
		<p>Store Phone Number:
		<input type="tel" name='p_number'></p>
		<hr>
		<p>Add Manager:
		<p class='mgr'>&emsp;First Name:
		<input type="text" name='fname'></p>
		<p class='mgr'>&emsp;Last Name:
		<input type="text" name='lname'></p>
		<p class='mgr'>&emsp;Birth Date:
		<input type="date" name='birthdate'></p>
		<p class='mgr'>&emsp;Sex:
		<select id="sex" name="sex">
		    <option value="F">Female</option>
		    <option value="M">Male</option>
		    <option value="O">Other</option>
		    <option value="P">Prefer Not To Say</option>
		</select></p>
		<p class='mgr'>&emsp;Password:
		<input type="text" name='password'></p>
		<p class='mgr'>&emsp;Repeat Password:</p>
		<span>&ensp;&nbsp;</span>
		<input type="text" name='p_repeat' >
		</p>
		<button id='post' type="submit" name="submit_btn">Add Store</button>
	</form>
</body>
</html>

<?php 
    if(isset($_REQUEST['submit_btn']))
    {
	    $fname = trim($_POST["fname"]);
	    $lname = trim($_POST["lname"]);
	    $input_date = $_POST["birthdate"];
	    $date = date("Y-m-d", strtotime($input_date));
	    $sex = $_POST["sex"];
	    $password = trim($_POST["password"]);
	    $p_repeat = trim($_POST["p_repeat"]);
	    $name = trim($_POST["name"]);
	    $p_number = trim($_POST["p_number"]);

	    $store_query = "SELECT store_id FROM store ORDER BY store_id DESC LIMIT 1;";
	   	$result = mysqli_query($conn, $store_query);
	   	

		if ($result) {

			$max_id = max(mysqli_fetch_array($result));
			$store_id = $max_id + 100;
		}

	    if (empty($fname) or empty($lname) or empty($date) or empty($sex) or empty($password) or empty($p_repeat)) {

	    	header('Location:add_store.php?error=emptyfields');
	    	exit();

		} else if ($password != $p_repeat) {

			header('Location:add_store.php?error=passwords_do_not_match');
			exit();
		}

		$salary = 17.65;
		$add_mgr = "INSERT INTO employee (emp_id, first_name, last_name, birth_day, sex, salary, store_id, admin_password) VALUES ({$store_id}, '{$fname}', '{$lname}', '{$date}', '{$sex}', {$salary}, NULL, '{$password}');";

		if (!mysqli_query($conn, $add_mgr)) {

			echo "Error: " . $add_mgr . "" . mysqli_error($conn);
			echo "<hr>";
		}

		$add_store = "INSERT INTO store VALUES ({$store_id}, '{$name}', '{$p_number}', {$store_id}, 1, $salary, 16.65);";

		if (!mysqli_query($conn, $add_store)) {

			echo "Error: " . $add_store . "" . mysqli_error($conn);

		} else {

			echo "Store added successfully.";
			echo "<br>";
		}

		$sql = "UPDATE employee SET store_id = {$store_id} WHERE emp_id = {$store_id};";
		if (!mysqli_query($conn, $sql)) {


		} else {

			echo "Manager established.";
		}
    }
?>