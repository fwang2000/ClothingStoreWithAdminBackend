<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<?php

		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "Babalaba123!";
		$dbName = "storeproject";

		$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		if (!$conn) {

			die("Connection failed: ".mysqli_connect_error());
		}

	?>

</body>
</html>
