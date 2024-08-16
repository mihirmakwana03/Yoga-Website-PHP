<?php

session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;

$conn = new mysqli("localhost", "root", "", "wdm");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$q = "SELECT * FROM yoga_registrations where username = '$username'";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($result);

// echo "Current Date: " . $currentDate . "<br>";
// echo "Trial End Date: " . $trialEndDate . "<br>";
// echo $username;

if ($row) {
	$date = $row['date'];
	$dateObj = strtotime($date);
	$dateFormatted = date("Y-m-d", $dateObj);

	$currentDate = date("Y-m-d");
	$trialEndDate = date("Y-m-d", strtotime("+15 days", strtotime($dateFormatted)));

	echo "<style>form input, form button, form select { pointer-events: none; opacity: 0.5; }</style>";
	if ($currentDate > $trialEndDate) {
		echo "<script>alert('Your free trial has expired!');</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="yoga.css">
	<style>
		.but {
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			transition: transform 0.3s ease;
			text-decoration: none;
		}

		nav .but:hover {
			transform: scale(1.05);
		}

		/* Additional styling for the form */
		form {
			margin-top: 20px;
			text-align: center;
		}

		form input {
			padding: 10px;
			margin: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 200px;
		}

		form button {
			padding: 10px;
			margin: 5px;
			background-color: #3F2860;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		form button:hover {
			background-color: #A26100;
		}

		form select {
			padding: 10px;
			margin: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 200px;
		}
	</style>
	<title>Path of Light Yoga Studio</title>
</head>

<body>
	<div class="header">
		<h1 class="h1"> &nbsp; Path of Light Yogo Studio <img class="himg" src="images/lilyheader.jpg" alt="Lily"></h1>
	</div>
	<br>
	<div id="mylinks" class="links">
		<form style="display:inline-block">
			<nav>
				<a class="but" href="home.php">Home</a>
				&nbsp;
				<a class="but" href="diet.php">Diet</a>
				&nbsp;
				<a class="but" href="classes.php">Classes</a>
				&nbsp;
				<a class="but" href="schedule.php">Schedule</a>
				&nbsp;
				<a class="but" href="contact.php">Contact</a>
				&nbsp;
			</nav>
		</form>
	</div>

	<table>
		<tr>
			<td>
				<img src="images/pexels-yan-krukau-8436490.jpg" alt="Mat"
					style="width:90%;height:90%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
			</td>
			<td>
				<img src="images/pexels-yan-krukau-8436683.jpg" alt="Mat"
					style="width:90%;height:90%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
			</td>
		</tr>
	</table>



	<div id="wrapper">
		<h2>Yoga Classes</h2>

		<!-- Form for Sessions, Date, Time -->
		<form method="POST" action="">
			<label for="sessions">Sessions:</label>
			<select id="sessions" name="sessions" required>
				<option value="Morning">Morning session (7:00 AM to 11:00 AM)</option>
				<option value="Afternoon">Afternoon session (12:00 PM to 3:00 PM)</option>
				<option value="Evening">Evening session (5:00 PM to 8:00 PM)</option>
			</select><br>

			<label for="date">Date:</label>
			<input type="date" id="date" name="date" required><br>

			<label for="">15 Days Free Trial:</label>
			<select name="free_trial" id="ft" required>
				<option value="Bronze">Price ₹ 500</option>
				<option value="Silver">Price ₹ 1000</option>
				<option value="Gold">Price ₹ 1500</option>
			</select>

			<br><br>

			<button type="submit">Book Free Trial</button>
		</form>

		<h3 align="center" style="color:red">Location: SEMCOM College, VVN, ANAND, Gujarat, 388001</h3>

		<?php

		$conn = new mysqli("localhost", "root", "", "wdm");

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// $username = $_SESSION['username'];
		
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				$row = mysqli_fetch_assoc($result);
				$name = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
				if (!$row) {
					echo "<script>alert('Err');</script>";
				} else {

					// header("Location: home.php");
		
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						$sessions = $_POST['sessions'];
						$date = $_POST['date'];
						if ($_SERVER['REQUEST_METHOD'] === 'POST') {
							$sessions = $_POST['sessions'];
							$date = $_POST['date'];

							if ($sessions === 'Morning') {
								$time = '7:00 AM to 11:00 AM';
							} elseif ($sessions === 'Afternoon') {
								$time = '12:00 PM to 3:00 PM';
							} elseif ($sessions === 'Evening') {
								$time = '5:00 PM to 8:00 PM';
							} else {
								$time = '';
							}

							$free_trial = $_POST['free_trial'];
							if ($free_trial=="Gold"){
								$month = "3 Months";
							}
							else if ($free_trial=="Silver"){
								$month = "2 Months";
							}
							else if ($free_trial=="Bronze"){
								$month = "1 Month";
							}

							// Insert the form data into the yoga_registration table
							$sql = "INSERT INTO yoga_registrations (`name`, email, phone, `session`, `date`, `time`,`free_trial`) VALUES ('$name', '$email', '$phone', '$sessions', '$date', '$time','$free_trial')";
							require 'connection/connection.php';
							if ($conn->query($sql) === false) {
								if ($conn->errno == 1062) {
									echo "<script>alert('You have already registered for this session!');</script>";
								} else {
									echo "Error: " . $sql . "<br />" . $conn->error . "<br />";
								}
							} else {
								echo "<script>alert('You have registered for ".$free_trial." plan for ".$month."');</script>";
							}
							$currentDate = date("Y-m-d");
							$trialEndDate = date("Y-m-d", strtotime("+15 days", strtotime($date)));

							if ($currentDate > $trialEndDate) {
								echo "<script>alert('Your free trial has expired!');</script>";
							}
							$conn->close();
						}
					}
				}
			} else {
				echo "<script>alert('Invalid credentials!');</script>";
			}
		}

		$sql = "SELECT * FROM class";
		require 'connection/connection.php';
		if ($conn->query($sql) === false) {
			echo "Error: " . $sql . "<br />" . $conn->error . "<br />";
		} else {
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<h3 style='font-weight: normal;'> " . $row['classname'] . " </h3> ";
					echo "<p style='margin-left: 40px'> " . $row['description'] . " </p> ";
				}
			}
		}
		$conn->close();
		?>
	</div>

	<div class="footer">
		<footer>
			<small>Copyright &copy; 2024, Path of Light Yoga Studio</small>
		</footer>
		<address>
			<small><a href="mailto:mihirpmakwana786@gmail.com">mihirpmakwana786@gmail.com</a></small>
		</address>
	</div>

</body>

</html>