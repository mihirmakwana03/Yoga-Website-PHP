<?php

session_start();


// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit();
// }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="\yoga.css">
    <!-- <title>Users Data</title> -->
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
            width: 80%;
            margin: 0 auto;
            display: inline-block;
        }

        .wrap2 {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #5e9eaf;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
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
        <h1 class="h1"> &nbsp; Path of Light Yoga Studio <img class="himg" src="../images/lilyheader.jpg" alt="Lily"
                style="border-radius: 5%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"></h1>
        </h1>
    </div>
    <br><br><br>

    <style>
        .menubar {
            background-color: #333;
            padding: 20px;
            position: relative;
            top: 0;
            left: 0;
        }

        .menubar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .menubar ul li {
            margin-right: 10px;
        }

        .menubar ul li a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menubar ul li a:hover {
            background-color: #5e9eaf;
            color: #fff;
        }
    </style>

    <div class="menubar">
        <ul>
            <li><a href="users.php">Users</a></li>
            <li><a href="registration.php">Classes Registrations</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <?php

        $conn = new mysqli("localhost", "root", "", "wdm");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $users_query = "SELECT * FROM users";
        $users_result = $conn->query($users_query);

        $registrations_query = "SELECT * FROM yoga_registrations";
        $registrations_result = $conn->query($registrations_query);

        $contact_query = "SELECT * FROM contact";
        $contact_result = $conn->query($contact_query);

        
        $users_count = $users_result->num_rows;
        $registrations_count = $registrations_result->num_rows;
        $contact_count = $contact_result->num_rows;
    

    ?>
    <style>
        .info-container {
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .info-container h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .info-container p {
            color: #666;
            font-size: 16px;
            margin-bottom: 5px;
        }
    </style>

    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <div class="info-container <?php if ($current_page !== 'admin.php') echo 'hidden'; ?>">
        <h2>Users</h2>
        <p>Total Users: <?php echo $users_count; ?></p>
    </div>

    <div class="info-container <?php if ($current_page !== 'admin.php') echo 'hidden'; ?>">
        <h2>Yoga Registrations</h2>
        <p>Total Registrations: <?php echo $registrations_count; ?></p>
    </div>

    <div class="info-container <?php if ($current_page !== 'admin.php') echo 'hidden'; ?>">
        <h2>Contact Queries</h2>
        <p>Total Queries: <?php echo $contact_count; ?></p>
    </div>

    <style>
        .hidden {
            display: none;
        }
    </style>

    <style>
        .footer {
            background-color: #5e9eaf;
            text-align: center;
            padding: 20px;
            font-style: italic;
            position: fixed;
            bottom: 0;
            width: 100%;
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

<?php
// Destroy the session when the page is closed
session_destroy();
?>