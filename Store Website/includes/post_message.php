<?php 

	session_start();

	$row = $_SESSION['row'];

	if (isset($_POST['msg']) and isset($_POST['recipients'])) {

		require 'dbh.inc.php';

		$msg = trim($_POST['msg']);
		$recipients = array_filter(explode(', ', $_POST['recipients']));

		if (empty($recipients)) {

			header('Location: ../admin_page.php?error=missing_recipients');
			exit();

		} elseif (empty($msg)) {
			
			header('Location: ../admin_page.php?error=missing_content');
			exit();

		} else {

			$first_name = $row['first_name'] . " ";
			$name = $first_name . $row['last_name'];
			$insert = "INSERT INTO messages(name, message) VALUES('{$name}', '{$msg}');";
			
			if (!mysqli_query($conn, $insert)) {

				header("Location: ../admin_page.php?error=sql_error");
				exit();
			}

			$msg_id = mysqli_insert_id($conn);

			foreach ($recipients as $person) {
				
				$get_person = "SELECT emp_id FROM employee WHERE CONCAT(first_name, ' ', last_name) = '{$person}';";

				$stmt = mysqli_stmt_init($conn);

				if (!mysqli_stmt_prepare($stmt, $get_person)) {

					header('Location: ../admin_page.php?error=stmterror');
					exit(); 

				} 

				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($value = mysqli_fetch_assoc($result)) {

					$sql = "INSERT INTO msg_r VALUES({$msg_id}, {$value['emp_id']});";

					if (!mysqli_query($conn, $sql)) {

							header("Location: ../admin_page.php?error=sql_error");
							exit();
					}

				} else {

					header('Location: ../admin_page.php?error=nouserfound');
					exit();
				}

			}

			header("Location: ../admin_page.php");
			exit();
		}

	} else {

		echo('help');
	}
?>