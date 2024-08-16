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
    <title>Path of Light Yogo Studio</title>
    <style>
        /* Add additional styling for the grid */
        #sectionGrid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .section {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .section img {
            width: 100%;
            border-radius: 10px;
        }

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
        <div class=wrap1>
            <img class="himg1"
                style="width:300px; height:350px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); animation: rotate 5s infinite;"
                src="images/pexels-lucas-pezeta-2035066.jpg" alt="Door2">
            <style>
                .himg1 {
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                    transition: transform 0.5s ease;
                    text-decoration: none;
                }

                .himg1:hover {
                    transform: scale(1.05);
                }
            </style>
        </div>
        <div class=wrap2>
            <h2>Find Your Inner Light</h2>
            <p><i>Path of Light Yogo Studio</i> provides all levels of yoga practice in a tranquil, peaceful
                environment.
                Whether you are new to yoga or an experienced practitioner, our dedicated instructors can develop a
                practice to meet your needs. Let your inner light shine at the Path of Light Yogo Studio.</p>

            <ul>
                <li>Hatha, Vinyasa and Restorative Yoga classes</li>
                <li>Drop-ins welcome</li>
                <li>Mats, blocks and blankets provided</li>
                <li>Relax in our Serenity Lounge before or after your class</li>
            </ul>
        </div>

        <!-- Added grid structure with links to different sections -->
        <div id="sectionGrid">
            <div class="section">
                <a href="yoga.php">
                    <img src="images/Yoga.jpg" alt="Yoga Image">
                    <h3>Yoga</h3>
                </a>
            </div>
            <div class="section">
                <a href="fitness.php">
                    <img src="images/Fitness.jpg" alt="Fitness Image">
                    <h3>Fitness</h3>
                </a>
            </div>
            <div class="section">
                <a href="workout.php">
                    <img src="images/Workout.jpg" alt="Workout Image">
                    <h3>Workout</h3>
                </a>
            </div>
            
            <div class="section">
                <a href="nutrients.php">
                    <img src="images/Nutrients.jpg" alt="Nutrients Image">
                    <h3>Nutrients for daily life</h3>
                </a>
            </div>
        </div>
        <style>
            /* Add additional styling for the grid */
            #sectionGrid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-gap: 20px;
                margin-top: 20px;
            }

            .section {
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                transition: transform 0.3s ease;
            }

            .section a {
                text-decoration: none;
            }

            .section:hover {
                transform: scale(1.05);
            }

            .section img {
                width: 100%;
                border-radius: 10px;
            }

            .section h3 {
                font-size: 24px;
                color: #fff;
                background-color: #333;
                padding: 10px;

                border-radius: 5px;
                text-align: center;
                margin-top: 10px;
            }
        </style>

        <br>
        <br>
        <br>
        <br>
        <br>
        <p><i>Path of Light Yoga Studio</i><br>ABC Building<br>Anand, Gujarat - 388001</p>
        <p>123-456-7890</p>


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