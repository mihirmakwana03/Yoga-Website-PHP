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
    <title>Fitness - Path of Light Yoga Studio</title>
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
            <h2>Daily Routine</h2>
            <img src="images/Fitness/pexels-cottonbro-studio-4009768.jpg" alt="Daily Routine Image">
            <p>
                Establishing a consistent daily routine is crucial for maintaining a healthy and balanced lifestyle.
                Our fitness program includes a well-structured daily routine that combines various activities to
                promote physical and mental well-being.
            </p>
        </div>

        <div class="section">
            <h2>Working Time</h2>
            <img src="images/Fitness/pexels-jess-bailey-designs-839443.jpg" alt="Working Time Image">
            <p>
                Find the perfect balance between work and fitness with our designated working time slots. Our trainers
                will guide you through effective workouts during these hours, ensuring maximum productivity and
                results.
            </p>
        </div>

        <div class="section">
            <h2>Eating Schedule</h2>
            <img src="images/Fitness/pexels-nadin-sh-18514947.jpg" alt="Eating Schedule Image">
            <p>
                Nutrition plays a crucial role in achieving fitness goals. Our fitness program includes a customized
                eating schedule designed to provide the right balance of nutrients at the right time. Fuel your body
                for optimal performance and recovery.
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