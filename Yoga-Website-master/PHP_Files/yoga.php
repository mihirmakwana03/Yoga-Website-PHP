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
    <title>Yoga - Path of Light Yoga Studio</title>
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
            <h2>Suryanamaskar</h2>
            <img src="images/YOGA/_62bcf286-883e-420b-9c96-0e4960f35ff3.jpg" alt="Suryanamaskar Image">
            <p>
                Suryanamaskar, also known as Sun Salutation, is a sequence of yoga poses that are often performed in the
                morning to greet the sun and invigorate the body. It consists of a series of twelve postures, each with
                specific benefits for physical and mental well-being.
            </p>
        </div>

        <div class="section">
            <h2>Hatha Yoga</h2>
            <img src="images/YOGA/pexels-hong-son-4010069.jpg" alt="Hatha Yoga Image">
            <p>
                Hatha Yoga is a traditional form of yoga that focuses on physical postures (asanas) and breath control
                (pranayama). It is a gentle and slower-paced practice, making it suitable for beginners. Hatha Yoga
                promotes balance, flexibility, and relaxation.
            </p>
        </div>

        <div class="section">
            <h2>Kundalini Yoga</h2>
            <img src="images/YOGA/_cf27b6ab-93f9-478f-a9f0-ce3b11a9dbbe.jpg" alt="Kundalini Yoga Image">
            <p>
                Kundalini Yoga is a spiritual and dynamic form of yoga that aims to awaken the dormant energy at the base
                of the spine (kundalini). It involves a combination of physical postures, breathing exercises, and
                meditation. Kundalini Yoga is known for its transformative and energizing effects.
            </p>
        </div>

        <div class="section">
            <h2>Ashtanga Yoga</h2>
            <img src="images/YOGA/pexels-jerry-moreno-4171730.jpg" alt="Ashtanga Yoga Image">
            <p>
                Ashtanga Yoga is a vigorous and physically demanding style of yoga that follows a specific sequence of
                postures. It emphasizes synchronized breath and movement, providing a challenging practice that builds
                strength, flexibility, and endurance.
            </p>
        </div>

        <div class="section">
            <h2>Bikram Yoga</h2>
            <img src="images/YOGA/pexels-elina-fairytale-4662468.jpg" alt="Bikram Yoga Image">
            <p>
                Bikram Yoga, also known as hot yoga, is a practice performed in a heated room. It consists of a series
                of 26 postures and two breathing exercises. The heat helps to increase flexibility and detoxify the
                body. Bikram Yoga is known for its intense and rejuvenating nature.
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
