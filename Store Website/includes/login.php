<?php

	session_start();

	if (isset($_POST['login-submit'])) {

		require 'dbh.inc.php';

		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$empid = trim($_POST['empid']);
		$password = trim($_POST['password']);

		if (empty($fname) || empty($lname) || empty($empid) || empty($password)) {

			header('Location: ../admin_login.php?error=emptyfields&fname='.$fname."&lname=".$lname);
			exit();

		} else {

			$sql = 'SELECT * FROM employee WHERE first_name=? AND last_name=? AND emp_id=?;';
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {

				header('Location: ../admin_login.php?error=sqlerror');
				exit();

			} else {

				mysqli_stmt_bind_param($stmt, 'sss', $fname, $lname, $empid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($row = mysqli_fetch_assoc($result)) {

					$pwcheck = $password == $row['admin_password'];

					if (!$pwcheck) {

						header('Location: ../admin_login.php?error=incorrectpassword');
						exit();

					} else {

						$_SESSION['row'] = $row;
						header('Location: ../admin_page.php');
						exit();

					}

				} else {

					header('Location: ../admin_login.php?error=nouserfound');
					exit();
				}
			}
		}

	} else {

		header('Location: ../admin_login.php');
		exit();
	}

?>

<a href="admin_page.php" title="">Go to other page</a>