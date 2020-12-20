<?php
	require_once 'includes/dbh.inc.php';

	session_start();
	$row = $_SESSION['row'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_page_sheet.css?v=<?php echo time(); ?>">
	<title>Administration Dashboard</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/admin_page_js.js"></script>
</head>
<body>
	<div class='head'>
		<span id="title">Administration Dashboard</span>
		<a href="site.php"><span id="Home">AI</span></a>
	</div>
	<div class='nav'>
		<?php 

			echo $row['first_name'];
			echo " ";
			echo $row['last_name'];
		?>
		<span class="container">
			<a onclick="window.open('admin_account.php', '_blank', 'height=500, width=378, scrollbars=yes');"><button id="Account">Account</button></a>
			<form action="includes/logout.php" method="post"><button id="Logout">Log Out</button></form>
		</span>
	</div>
	<div id="grid">
		<nav class="tabs">
		  <button class="tablink" id="m_button" onclick="openTab(event, 'messages')">Messages</button>
		  <hr class="tab_divide">
		  <button class="tablink" id="t_button" onclick="openTab(event, 'transactions')">Transactions</button>
		  <hr class="tab_divide">
		  <button class="tablink" id="s_button" onclick="openTab(event, 'store')">Store</button>
		</nav>
		<div class="tab" id="messages">

			<?php 

				$sql = "SELECT * FROM msg_r WHERE r_id = {$row['emp_id']} ORDER BY msg_id DESC;";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) == 0) {

					echo '<span style="font-style: italic;">No Messages</span>';

				} else {

					while ($m_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

						$get_msg = "SELECT * FROM messages WHERE id = {$m_row['msg_id']};";
						$new_result = mysqli_query($conn, $get_msg);
						$msg = mysqli_fetch_array($new_result, MYSQLI_ASSOC);
						echo "<div class='message'>";
						echo "<span class='text'>{$msg['message']}</span>";
						echo "<hr>";
						echo "<span class='sender'>{$msg['name']}</span>";
						echo "<span class='date'>{$msg['msg_dt']}</span>";
						echo "</div>";
					}
				}
			?>
		</div>
		<div class="tab" id="transactions">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div id="other">
			<form action="includes/post_message.php" method="post">
				<span>To</span>
				<input type="text" id="recipients" name='recipients' placeholder="...">
				<hr>
				<textarea id='msg' name='msg' placeholder="Type Your Message Here..."></textarea>
				<button id='post' type="submit">Post</button>
			</form>
		</div>
		<div class="tab" id="store">
			<?php 

				$store_query = "SELECT store_name FROM store WHERE store_id={$row['store_id']};";
				$result = mysqli_query($conn, $store_query);
				if ($result) {

					$name = mysqli_fetch_assoc($result);
					echo "<span id='store_name'>";
					echo $name['store_name'] . " Branch";
					echo "</span>";
				}
			?>

			<span class="popup" onclick="popup()">

				<img src="images/settings.png" width="16" height="16" >
				<span class="popuptext" id="poptext">
					<a href="admin_control/add_emp.php" target="popup" onclick="window.open('admin_control/add_emp.php', 'name','width=300,height=400')"> Add Employee </a> <br>
					<a href="admin_control/remove_emp.php" target="popup" onclick="window.open('admin_control/remove_emp.php', 'name', 'width=250, height=300')"> Remove Employee </a><br>
					<?php

						if ($row['store_id'] == 1) {
							
							echo('<a href="admin_control/add_store.php" target="popup" onclick="window.open(\'admin_control/add_store.php\', \'name\', \'width=300, height=400\')">Add Store</a>');
							echo "<br>";
							echo('<a href="admin_control/remove_store.php" target="popup" onclick="window.open(\'admin_control/remove_store.php\', \'name\', \'width=300, height=400\')">Remove Store</a>');
							echo "<br>";
						}
					?>
				</span>
			</span>


			<?php
				$emp_query = "SELECT emp_id, first_name, last_name, salary FROM employee WHERE store_id = {$row['store_id']} AND emp_id != {$row['emp_id']}";
				$result = mysqli_query($conn, $emp_query);

				echo "<table>";
				echo "<tr>";
				echo "<th class='id'>ID</th>";
				echo "<th class='name'>Name</th>";
				echo "<th class='lname'></th>";
				echo "<th class='salary'>Salary</th>";
				echo "</tr>";

				while($e_row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

					echo "<tr>";
					echo "<th class='id normal'>".$e_row['emp_id']."</th>";
					echo "<th class='name normal'>".$e_row['first_name']."</th>";
					echo "<th class='lname normal'>".$e_row['last_name']."</th>";
					echo "<th class='salary normal'>".$e_row['salary']."</th>";
					echo "</tr>";
				}

				echo "</table>";
			?>
		</div>
	</div>
</body>
</html>