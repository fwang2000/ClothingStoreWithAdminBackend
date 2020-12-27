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
		<span>Store Removal</span>
		<br>
		<br>
		<span>Store ID:</span>
		<input type="text" name='id' minlength="3">
		<hr>
		<span>Confirm?</span>
		<input type="checkbox" name='confirm' value="Yes">
		<hr>
		<button id='post' type="submit" name="submit_btn">Remove Store</button>
	</form>
</body>
</html>

<?php 
    if(isset($_REQUEST['submit_btn']))
    {
	    $id = trim($_POST["id"]);

	    if (empty($id)) {

	    	header('Location: remove_store.php?error=emptyfields');
	    	exit();

		} elseif ($id == 1) {
			
			header('Location: remove_store.php?error=cannotremovecorporate');
			exit();
		}

		if (isset($_POST['confirm']) and $_POST['confirm'] == 'Yes') {

			$emp_query = "DELETE FROM employee WHERE store_id = {$id};";
			if (mysqli_query($conn, $emp_query)) {

				echo "<br>";
				echo "Employees successfully removed.";

			} else {

				echo "Error: " . $add . "<br>" . mysqli_error($conn);
			}

			$remove = "DELETE FROM store WHERE store_id = {$id};";
			if (mysqli_query($conn, $remove)) {

				echo "<br>";
				echo "Store successfully removed.";

			} else {

				echo "<br>";
				echo "Error: " . $add . "<br>" . mysqli_error($conn);
			}

		} else {

			echo "<br>";
			echo "Confirmation is required to remove store.";
		}
    }
?>