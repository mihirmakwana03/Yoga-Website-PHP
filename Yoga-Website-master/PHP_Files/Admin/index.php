<?php

$conn = new mysqli("localhost", "root", "", "wdm");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND pass = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // echo "Login successful!";
        header("Location: admin.php");
    } else {
        echo "Invalid credentials!";
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
    <title>Admin Login</title>
    <style>
        /* Updated styling for a more attractive appearance */
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
            width: 60%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        .wrap2 {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            text-align: center;
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
</head>

<body>
    <div class="header">
        <h1 class="h1"> &nbsp; Path of Light Yoga Studio <img class="himg" src="../images/lilyheader.jpg" alt="Lily" style="border-radius: 5%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"></h1>
        </h1>
    </div>
    <div id="wrapper">
        <div class="wrap2">
            <h2>Admin Login</h2>
            <form id="adminLoginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="cBox" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="cBox" required>

                <input type="submit" value="Login" class="but">
            </form>
        </div>
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

</html><?php

session_start(); // Start the session

$conn = new mysqli("localhost", "root", "", "wdm");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND pass = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; // Store the username in the session
        header("Location: admin.php");
    } else {
        echo "Invalid credentials!";
    }

    $stmt->close();
}

$conn->close();
?>
