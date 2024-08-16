<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="yoga.css">
    <title>Workout - Path of Light Yoga Studio</title>
    <style>
        /* Add additional styling for the grid */
        body {
            color: #3F2860;
            background-color: #F5F5F5;
            font-family: "Tahoma", Sans-serif;
        }

        html {
            background-color: #3F2860;
        }

        .h1 {
            line-height: 200%;
        }

        .header {
            background-color: #9BC1C2;
            text-align: left;
            padding: 10px;
        }

        .himg {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 400px;
            height: 125px;
        }

        .himg1 {
            vertical-align: middle;
            display: inline-block;
            width: 250px;
            height: 300px;
        }

        .links {
            width: 200px;
            height: 450px;
            font-weight: bold;
            float: left;
        }

        .links form a:hover {
            color: #A26100;
        }

        .links form a:visited {
            color: #497777;
        }

        .wrap1 {
            display: inline-block;
        }

        .wrap2 {
            position: absolute;
            display: inline-block;
            padding: 20px;
        }

        .but {
            display: block;
            text-align: center;
            padding: 15px 16px;
            border-bottom: 3px solid #898888;
            border-right: 3px solid #898888;
            border-left: 3px solid #CCCCCC;
            border-top: 3px solid #CCCCCC;
            width: 80%;
            position: relative;
            left: 20px;
        }

        #wrapper {
            width: 80%;
            margin: 0 auto;
            display: inline-block;
        }

        nav {
            text-align: center;
            font-weight: bold;
        }

        .section {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        .section img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
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
    <div id="wrapper">
        <div class="section">
            <h2>Time to Do Yoga</h2>
            <img src="images/Workout/pexels-olia-danilevich-5038888.jpg" alt="Time to Do Yoga Image">
            <p>
                Set aside a dedicated time for your yoga practice. Consistency is key to reaping the benefits of yoga.
                Choose a time that aligns with your schedule and allows you to fully focus on your practice.
            </p>
        </div>

        <div class="section">
            <h2>Time to Walk Daily</h2>
            <img src="images/Workout/pexels-andrea-piacquadio-3807549.jpg" alt="Time to Walk Daily Image">
            <p>
                Incorporate daily walks into your routine for overall well-being. Whether it's a morning stroll or an
                evening walk, spending time in nature and staying active enhances your fitness journey.
            </p>
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

</html>