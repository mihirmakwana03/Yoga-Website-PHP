<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="yoga.css">
    <title>Diet and Nutrition</title>
    <style>
        /* Use the provided styling */
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

        .cBox {
            width: 200px;
            height: 40px;
        }

        label {
            display: inline-block;
            width: 200px;
            text-align: right;
        }

        .links form a:link,
        a:active {
            color: #3F2860;
        }

        .footer {
            background-color: #9BC1C2;
            text-align: center;
            padding: 20px;
            font-style: italic;
        }

        .but1 {
            position: relative;
            left: 200px;
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
    </div><br>
    <div id="wrapper">
        <div class=wrap1>
            <img class="himg1" style="width:600px; height:500px;" src="images/pexels-jane-doan-1105166.jpg" alt="Door2">
            <style>
                .himg1 {
                    width: 600px;
                    height: 500px;
                    border-radius: 10px;
                    /* Add border radius */
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                    /* Add shadow */
                }
            </style>
        </div>
        <div class=wrap2>
            <h2>Diet and Nutrition</h2>
            <p><i>Customized diet plans based on age and BMI to help you achieve your fitness goals.</i></p>

            <form id="nutritionForm">
                <label class="required" for="height">Height (meters):</label>
                <input type="number" id="height" name="height" class="cBox" step="0.01" required><br><br>

                <label class="required" for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" class="cBox" step="0.01" required><br><br>

                <label class="required" for="age">Age:</label>
                <input type="number" id="age" name="age" class="cBox" required><br><br>

                <label for="bmi">BMI:</label>
                <input type="number" id="bmi" name="bmi" class="cBox" readonly><br><br>

                <label for="proteins">Proteins (g):</label>
                <input type="text" id="proteins" name="proteins" class="cBox" readonly><br><br>

                <label for="nutrition">Nutrition:</label>
                <textarea id="nutrition" name="nutrition" rows="4" cols="50" readonly></textarea><br><br>

                <input type="button" value="Calculate" onclick="calculateNutrition()">
            </form>
            <style>
                .cBox:read-only {
                    background-color: #f2f2f2;
                }

                .required::after {
                    content: "*";
                    color: red;
                }
            </style>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
        <div>
            <div>
                <div class=wrap1>
                    <img class="himg1" style="width:1220px; height:900px;"
                        src="images/_46db286c-43a4-49f6-980f-ed045b57d5a4.jpg" alt="Door2">
                    <style>
                        .himg1 {
                            width: 600px;
                            height: 500px;
                            border-radius: 10px;
                            /* Add border radius */
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                            /* Add shadow */
                        }
                    </style>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>

    <div class="footer">
        <footer>
            <small>Copyright &copy; 2024, Path of Light Yoga Studio</small>
        </footer>
        <address>
            <small><a href="mailto:mihirpmakwana786@gmail.com">mihirpmakwana786@gmail.com</a></small>
        </address>
    </div>

    <script>
        function calculateNutrition() {
            // Get height, weight, and age values from the form
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);
            var age = document.getElementById('age').value;

            // Calculate BMI
            var bmi = (weight / (height * height))*10000;
            document.getElementById('bmi').value = bmi;

            // Calculate proteins and suggest nutrition based on BMI
            var proteins = age * 2; // Replace this with your actual calculation for proteins

            var nutrition = "";
            if (bmi < 18.5) {
                nutrition = "Underweight: Increase intake of proteins, healthy fats, and carbohydrates. Include more fruits, vegetables, and whole grains.";
                proteins = weight * 0.8;
            } else if (bmi >= 18.5 && bmi < 24.9) {
                nutrition = "Normal weight: Maintain a balanced diet with a mix of proteins, carbohydrates, and fats. Include a variety of fruits and vegetables.";
                proteins = weight * 0.8;
            } else if (bmi >= 25 && bmi < 29.9) {
                nutrition = "Overweight: Focus on portion control, increase physical activity, and choose lean proteins. Include more fiber-rich foods.";
                proteins = weight * 1;
            } else {
                nutrition = "Obese: Consult with a nutritionist or healthcare professional for a personalized diet plan. Emphasize on whole foods and regular exercise.";
                proteins = weight * 1.2;
            }

            // Update the fields
            document.getElementById('proteins').value = proteins;
            document.getElementById('nutrition').value = nutrition;
        }
    </script>
</body>

</html>