<?php
session_start();
$conn = new mysqli("localhost", "root", "", "wdm");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
	$stmt->bind_param("ss", $username, $password);

	$stmt->execute();

	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		// echo "Login successful!";
		$_SESSION['username'] = $username;
		header("Location: home.php");
	} else {
		echo "<script>alert('Invalid credentials!');</script>";
	}

	$stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="\yoga.css">
	<title>User Login</title>
	<style>
		body {
			color: #333;
			background-color: #f8f8f8;
			font-family: "Arial", sans-serif;
			margin: 0;
		}

		.header {
			background-color: #5e9eaf;
			text-align: left;
			padding: 10px;
		}

		.h1 {
			line-height: 200%;
			color: #fff;
			margin: 0;
		}

		.himg {
			position: absolute;
			top: 10px;
			right: 10px;
			width: 150px;
			height: 60px;
		}

		#wrapper {
			width: 50%;
			margin: 0 auto;
			/* display: inline-block; */
		}

		.wrap2 {
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			border-radius: 8px;
			text-align: center;
			margin-top: 20px;
		}

		h2 {
			color: #5e9eaf;
		}

		.cBox {
			width: 100%;
			padding: 10px;
			box-sizing: border-box;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		label {
			display: block;
			text-align: left;
			margin-bottom: 5px;
			color: #333;
		}

		.but {
			background-color: #5e9eaf;
			color: #fff;
			padding: 15px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}

		.but:hover {
			background-color: #4a8598;
		}

		.footer {
			background-color: #5e9eaf;
			text-align: center;
			padding: 20px;
			font-style: italic;
			position: absolute;
			bottom: 0;
			width: 100%;
		}

		small {
			color: #fff;
		}
	</style>
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
	</style>
</head>

<body>
	<div class="header">
		<h1 class="h1"> &nbsp; Path of Light Yoga Studio <img class="himg" src="images/lilyheader.jpg" alt="Lily"
				style="border-radius: 5%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"></h1>
	</div><br><br><br>
	<div id="wrapper">
		<div class="wrap2" style="width: 50%; margin: 0 auto;">
			<h2>User Login</h2>
			<form id="userLoginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" class="cBox" required>

				<label for="password">Password:</label>
				<input type="password" id="password" name="password" class="cBox" required>

				<input type="submit" value="Login" class="but">
			</form>
		</div>
	</div>
	<?php
	
	$isRegistered = false; 
	
	if (!$isRegistered) {
		echo '<div class="register-link" align="center">
					<p>Not registered yet? <a href="register.php">Register here</a></p>
				</div>';
	}
	?>


	<style>
		.register-link {
			margin-top: 20px;
			color: #5e9eaf;
		}

		.register-link a {
			color: #5e9eaf;
			text-decoration: none;
			font-weight: bold;
		}

		.register-link a:hover {
			text-decoration: underline;
		}
	</style>

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