<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="yoga.css">
	<title>Path of Light Yogo Studio</title>
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
			width: 100%;
			margin: 0 auto;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}

		.wrap2 {
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			border-radius: 8px;
			text-align: center;
			margin-top: -200px;
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
			text-align: left;
			margin-bottom: 5px;
			color: #333;
		}

		select {
			text-align: center;
			width: 43%;
			box-sizing: border-box;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.but1 {
			background-color: #5e9eaf;
			color: #fff;
			padding: 15px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			left: 0px;
			width: 100%;
		}

		.but1:hover {
			background-color: #4a8598;
		}

		.footer {
			background-color: #5e9eaf;
			text-align: center;
			padding: 20px;
			font-style: italic;
			position: absolute;
			bottom: -10;
			width: 100%;
		}

		small {
			color: #fff;
		}
	</style>
</head>

<body>
	<div class="header">
		<h1 class="h1"> &nbsp; Path of Light Yogo Studio <img class="himg" src="images/lilyheader.jpg" alt="Lily"></h1>
	</div><br><br><br>
	<div id="wrapper">
		<div class="wrap2">
			<h2>Register at Path of Light Yoga Studio</h2>
			<p>Required information is marked with an asterisk (*)</p>

			<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Database connection
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "wdm";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// Form data
				$name = $_POST['name'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$address = $_POST['address'];
				$state = $_POST['state'];
				$city = $_POST['city'];
				// $age = $_POST['age'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];

				// SQL query to insert data into the database
				if ($password != $cpassword) {
					echo "<script type='text/javascript'>alert('Password and Confirm Password do not match!');</script>";
					exit();
				}

				$display = "SELECT * FROM users WHERE username='$username' OR email='$email'";
				$result = $conn->query($display);
				if ($result->num_rows > 0) {
					echo "<script type='text/javascript'>alert('Username or Email already exists!');</script>";
					exit();
				}

				$sql = "INSERT INTO users (name, username, email, phone, address, state, city, password) VALUES ('$name', '$username', '$email', '$phone', '$address', '$state', '$city', '$password')";

				if ($conn->query($sql) === TRUE) {
					echo "<script type='text/javascript'>alert('Registration successful!');</script>";
					header("Location: index.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			}
			?>

			
			<form method='post' name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>"
				onsubmit="return validateForm();">
				<label for="name"><b>* Name:</b></label>
				<input type="text" name="name" value="" id='name' required>
				<br><br>
				<label for="username"><b>* Username:</b></label>
				<input type="text" name="username" value="" id='username' required>
				<br><br>
				<label for="email"><b>* E-mail:</b></label>
				<input type="email" name="email" value="" id='email' required>
				<br><br>
				<label for="phone"><b>* Phone:</b></label>
				<input type="tel" name="phone" value="" id='phone' required>
				<br><br>
				<label for="address"><b>* Address:</b></label>
				<input class="" type="text" name="address" maxlength="100" id='address' value="">
				<br><br>
				<label for="state"><b>State:</b></label>
				<input type="text" name="state" value="" id='state'>
				<br><br>
				<label for="city"><b>City:</b></label>
				<input type="text" name="city" value="" id='city'>
				<br><br>
				<!-- <label for="age"><b>Age:</b></label>
				<input type="number" name="age" value="" id='age'> -->
				<!-- <br><br> -->
				<label for="password"><b>* Password:</b></label>
				<input type="password" name="password" value="" id='password' required>
				<br><br>
				<label for="cpassword"><b>* Confirm Password:</b></label>
				<input type="password" name="cpassword" value="" id='cpassword' required>
				<br><br>
				<input class="but1" type="submit" value="Register Now" style="text-align: center;">
			</form>
			<script>
				function validateForm() {
					var name = document.getElementById('name').value;
					var username = document.getElementById('username').value;
					var email = document.getElementById('email').value;
					var phone = document.getElementById('phone').value;
					var password = document.getElementById('password').value;
					var cpassword = document.getElementById('cpassword').value;

					// Regex patterns
					var namePattern = /^[a-zA-Z\s]+$/;
					var usernamePattern = /^[a-zA-Z0-9_]+$/;
					var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
					var phonePattern = /^\d{10}$/;
					var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;

					if (!name.match(namePattern)) {
						alert("Invalid name format!");
						return false;
					}

					if (!username.match(usernamePattern)) {
						alert("Invalid username format!");
						return false;
					}

					if (!email.match(emailPattern)) {
						alert("Invalid email format!");
						return false;
					}

					if (!phone.match(phonePattern)) {
						alert("Invalid phone number format!");
						return false;
					}

					if (!password.match(passwordPattern)) {
						alert("Invalid password format!\nPassword must contain at least 8 characters, including one uppercase letter, one lowercase letter, one digit, and one special character.");
						return false;
					}

					if (password !== cpassword) {
						alert("Password and Confirm Password do not match!");
						return false;
					}

					return true;
				}
			</script>
		</div>
	</div>

	<div class="footer">
		<footer>
			<small>&copy; 2024, Path of Light Yoga Studio</small>
		</footer>
		<address>
			<small><a href="mailto:mihirpmakwana786@gmail.com">mihirpmakwana786@gmail.com</a></small>
		</address>
	</div>
</body>

</html>