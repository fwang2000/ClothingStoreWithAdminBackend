<?php
	require_once '../../includes/dbh.inc.php';

	session_start();
	$row = $_SESSION['row'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/control_sheet.css">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<span>Employee Removal</span>
		<br>
		<br>
		<span>Employee ID:</span>
		<input type="text" name='id' minlength="3">
		<hr>
		<span>Confirm?</span>
		<input type="checkbox" name='confirm' value="Yes">
		<hr>
		<button id='post' type="submit" name="submit_btn">Remove Employee</button>
	</form>
</body>
</html>

<?php 
    if(isset($_REQUEST['submit_btn']))
    {
	    $id = trim($_POST["id"]);

	    if (empty($id)) {

	    	header('Location: remove_emp.php?error=emptyfields');
	    	exit();

		}

		if (isset($_POST['confirm']) and $_POST['confirm'] == 'Yes') {

			$remove = "DELETE FROM employee WHERE emp_id = {$id};";
			if (mysqli_query($conn, $remove)) {

				echo "<br>";
				echo "Employee successfully removed.";

			} else {

				echo "<br>";
				echo "Error: " . $add . "<br>" . mysqli_error($conn);
			}

		} else {

			echo "<br>";
			echo "Confirmation is required to remove employee.";
		}
    }
?>