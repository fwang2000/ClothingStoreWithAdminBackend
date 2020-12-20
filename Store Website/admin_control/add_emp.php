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
	<form action="" method="post">
		<span>First Name:</span>
		<input type="text" id="fname" name='fname'>
		<hr>
		<span>Last Name:</span>
		<input type="text" id="lname" name='lname'>
		<hr>
		<span>Birth Date:</span>
		<input type="date" id="birthdate" name='birthdate'>
		<hr>
		<span>Sex:</span>
		<select id="sex" name="sex">
		    <option value="F">Female</option>
		    <option value="M">Male</option>
		    <option value="O">Other</option>
		    <option value="P">Prefer Not To Say</option>
		</select>
		<hr>
		<span>Password:</span>
		<input type="text" id="password" name='password'>
		<hr>
		<span>Repeat Password:</span>
		<input type="text" id="p_repeat" name='p_repeat'>
		<hr>
		<span>Grant Admin Priviledges:</span>
		<input type="checkbox" id="priviledges" name='priviledges' value="Yes">
		<hr>
		<button id='post' type="submit" name="submit_btn">Add Employee</button>
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

	    $store_query = "SELECT store_id, employee_num FROM store WHERE store_id = {$row['store_id']};";

	   	$result = mysqli_query($conn, $store_query);
		if ($result) {

			$store = mysqli_fetch_assoc($result);
			
		}

	    if (empty($fname) or empty($lname) or empty($date) or empty($sex) or empty($password) or empty($p_repeat)) {

	    	header('Location: add_emp.php?error=emptyfields');
	    	exit();

		} else if ($password != $p_repeat) {

			header('Location:add_emp.php?error=passwords_do_not_match');
			exit();
		}

		$store_id = $store['store_id'];
		$emp_id = $store_id + $store['employee_num'];
		$add;

		if (isset($_POST['priviledges']) and $_POST['priviledges'] == 'Yes') {

			$salary = 17.65;
			$add = "INSERT INTO employee (emp_id, first_name, last_name, birth_day, sex, salary, store_id, admin_password) VALUES ({$emp_id}, '{$fname}', '{$lname}', '{$date}', {$sex}, {$salary}, {$store_id}, '{$password}');";

		} else {

			$salary = 16.65;
			if ($row['emp_id'] <= 5) {

				$super_id = 1;
				$salary = 23.15;

			} else {

				$super_id = $row['emp_id'];
			}

			$add = "INSERT INTO employee VALUES ({$emp_id}, '{$fname}', '{$lname}', '{$date}', '{$sex}', {$salary}, {$super_id}, {$store_id}, '{$password}');";
		}

		if (mysqli_query($conn, $add)) {

			echo "<br>";
			echo "Employee successfully added.";

		} else {

			echo "<br>";
			echo "Error: " . $add . "<br>" . mysqli_error($conn);
		}
    }
?>