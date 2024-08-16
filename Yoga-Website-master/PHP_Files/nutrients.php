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
    <title>Nutrients - Path of Light Yoga Studio</title>
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

        /* Additional styling for the Nutrients page */
        #nutrientsSection {
            display: grid;
            /* grid-template-columns: repeat(3, 1fr); */
            grid-gap: 20px;
            margin-top: 20px;
        }

        .nutrientTable {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: transform 1s ease;
            margin-bottom: 20px;
        }

        .nutrientTable:hover {
            transform: scale(1.05);
        }

        .nutrientTable h3 {
            font-size: 20px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .nutrientTable table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .nutrientTable table,
        .nutrientTable th,
        .nutrientTable td {
            border: 1px solid #ddd;
        }

        .nutrientTable th,
        .nutrientTable td {
            padding: 10px;
            text-align: left;
        }

        .nutrientTable th {
            background-color: #f2f2f2;
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
        <!-- Added Nutrients for Daily Life section -->
        <div id="nutrientsSection">
            <div class="nutrientTable">
                <h3>List of Common Food Items with their Calories</h3>
                <table>
                    <tr>
                        <th>Food Item</th>
                        <th>Amount</th>
                        <th>Calories</th>
                    </tr>
                    <tr>
                        <td>Tea</td>
                        <td>One cup</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>Water</td>
                        <td>One Glass</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Milk Fat Free</td>
                        <td>One Glass</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Milk 2% Fat</td>
                        <td>One Glass</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>Milk 6% Fat</td>
                        <td>One Glass</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>Egg</td>
                        <td>One </td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Sugar</td>
                        <td>One tea spoon</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Bread</td>
                        <td>One slice</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>Coocked veg.</td>
                        <td>One cup</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Chhapati</td>
                        <td>One </td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Puri</td>
                        <td>One </td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Idli</td>
                        <td>Two </td>
                        <td>125</td>
                    </tr>
                    <tr>
                        <td>Khichdi</td>
                        <td>One cup</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Dahi Vada</td>
                        <td>Two </td>
                        <td>180</td>
                    </tr>
                    <tr>
                        <td>Cola</td>
                        <td>One tin</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Diet Cola</td>
                        <td>One tin</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Honey</td>
                        <td>One Tea spoon</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Ghee/Oil</td>
                        <td>One Tea spoon</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Banana</td>
                        <td>One medium size</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Apple</td>
                        <td>One medium size</td>
                        <td>65</td>
                    </tr>
                    <tr>
                        <td>Cucumber</td>
                        <td>One medium size</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Onion</td>
                        <td>One medium size</td>
                        <td>25</td>
                    </tr>
                </table>
            </div><br>
            <div class="nutrientTable">
                <h3>Values of common food items </h3>
                <h4 align="center">All values are per 100 gms. of edible portion</h4>
                <table>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name of the food stuff</th>
                        <th>Moisture</th>
                        <th>Protein(Nx6.25)</th>
                        <th>Fat</th>
                        <th>Carbohydrates</th>
                        <th>Minerals</th>
                        <th>Crude Fibre</th>
                        <th>Energy</th>
                        <th>Calcium</th>
                        <th>Phosphorus</th>
                        <th>Iron</th>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                        <td>(6)</td>
                        <td>(7)</td>
                        <td>(8)</td>
                        <td>(9)</td>
                        <td>(10)</td>
                        <td>(11)</td>
                        <td>(12)</td>
                    </tr>
                    <tr>
                        <td colspan="12"><b>A.CEREAL</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">1. BAJARA</td>
                        <td>12.4</td>
                        <td>11.6</td>
                        <td>5.0</td>
                        <td>67.5</td>
                        <td>2.3</td>
                        <td>1.2</td>
                        <td>361</td>
                        <td>42</td>
                        <td>296</td>
                        <td>8.0</td>
                    </tr>
                    <tr>
                        <td colspan="2">2. MAIZE, dry</td>
                        <td>14.9</td>
                        <td>11.1</td>
                        <td>3.6</td>
                        <td>66.2</td>
                        <td>1.5</td>
                        <td>2.7</td>
                        <td>342</td>
                        <td>10</td>
                        <td>348</td>
                        <td>2.3</td>
                    </tr>
                    <tr>
                        <td colspan="2">3. RICE, raw, handponded</td>
                        <td>13.3</td>
                        <td>7.5</td>
                        <td>1.0</td>
                        <td>76.7</td>
                        <td>0.9</td>
                        <td>0.6</td>
                        <td>346</td>
                        <td>10</td>
                        <td>190</td>
                        <td>3.2</td>
                    </tr>
                    <tr>
                        <td colspan="2">4. WHEAT, whole</td>
                        <td>12.8</td>
                        <td>11.8</td>
                        <td>1.5</td>
                        <td>71.2</td>
                        <td>1.5</td>
                        <td>1.2</td>
                        <td>346</td>
                        <td>41</td>
                        <td>306</td>
                        <td>5.3</td>
                    </tr>
                    <tr>
                        <td colspan="12"><b>B. PULSES</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">5. BENGAL GRAM, whole</td>
                        <td>9.8</td>
                        <td>17.1</td>
                        <td>5.3</td>
                        <td>60.9</td>
                        <td>3.0</td>
                        <td>3.9</td>
                        <td>360</td>
                        <td>202</td>
                        <td>312</td>
                        <td>4.6</td>
                    </tr>
                    <tr>
                        <td colspan="2">6. BLACK GRAM, dhal</td>
                        <td>10.9</td>
                        <td>24.0</td>
                        <td>1.4</td>
                        <td>59.6</td>
                        <td>3.2</td>
                        <td>0.9</td>
                        <td>347</td>
                        <td>154</td>
                        <td>385</td>
                        <td>3.8</td>
                    </tr>
                    <tr>
                        <td colspan="2">7. PEAS green</td>
                        <td>72.9</td>
                        <td>7.2</td>
                        <td>0.1</td>
                        <td>15.9</td>
                        <td>0.8</td>
                        <td>4.0</td>
                        <td>93</td>
                        <td>20</td>
                        <td>139</td>
                        <td>1.5</td>
                    </tr>
                    <tr>
                        <td colspan="2">8. PEAS dry</td>
                        <td>16.0</td>
                        <td>19.7</td>
                        <td>1.1</td>
                        <td>56.5</td>
                        <td>2.2</td>
                        <td>4.5</td>
                        <td>315</td>
                        <td>75</td>
                        <td>298</td>
                        <td>7.05</td>
                    </tr>
                    <tr>
                        <td colspan="2">9. SOYABEAN</td>
                        <td>8.1</td>
                        <td>43.2</td>
                        <td>19.5</td>
                        <td>20.9</td>
                        <td>4.6</td>
                        <td>3.7</td>
                        <td>432</td>
                        <td>240</td>
                        <td>690</td>
                        <td>10.4</td>
                    </tr>
                    <tr>
                        <td colspan="12"><b>C. LEAFY VEGETABLES</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">10. AMARNATH gangeticus(stem)</td>
                        <td>85.7</td>
                        <td>4.0</td>
                        <td>0.5</td>
                        <td>6.1</td>
                        <td>2.7</td>
                        <td>1.0</td>
                        <td>45</td>
                        <td>397</td>
                        <td>83</td>
                        <td>3.49</td>
                    </tr>
                    <tr>
                        <td colspan="2">11. BENGAL GRAM LEAVES</td>
                        <td>73.4</td>
                        <td>7.0</td>
                        <td>1.4</td>
                        <td>14.1</td>
                        <td>2.1</td>
                        <td>2.0</td>
                        <td>97</td>
                        <td>340</td>
                        <td>120</td>
                        <td>23.8</td>
                    </tr>
                    <tr>
                        <td colspan="2">12. BETEL LEAVES</td>
                        <td>85.4</td>
                        <td>3.1</td>
                        <td>0.8</td>
                        <td>6.1</td>
                        <td>2.3</td>
                        <td>2.3</td>
                        <td>44</td>
                        <td>230</td>
                        <td>40</td>
                        <td>10.6</td>
                    </tr>
                    <tr>
                        <td colspan="2">13. CABBAGE</td>
                        <td>91.9</td>
                        <td>1.8</td>
                        <td>0.1</td>
                        <td>4.6</td>
                        <td>0.6</td>
                        <td>1.0</td>
                        <td>27</td>
                        <td>39</td>
                        <td>44</td>
                        <td>0.8</td>
                    </tr>
                    <tr>
                        <td colspan="2">14. CAULIFLOWER GREENS</td>
                        <td>80.0</td>
                        <td>5.9</td>
                        <td>1.3</td>
                        <td>7.6</td>
                        <td>3.2</td>
                        <td>2.0</td>
                        <td>66</td>
                        <td>626</td>
                        <td>107</td>
                        <td>40.0</td>
                    </tr>
                </table>
            </div>
            <div class="nutrientTable">
                <h3>Cholestrol</h3>
                <table>
                    <tr>
                        <th>Food</th>
                        <th>Cholestrol in Miligram</th>
                    </tr>
                    <tr>
                        <td>Fruit</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Milk 8% fat one glass</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>Cheese</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Butter one spoon</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Chicken 3 egs.</td>
                        <td>76</td>
                    </tr>
                    <tr>
                        <td>Egg yellow</td>
                        <td>274</td>
                    </tr>
                    <tr>
                        <td>Fish</td>
                        <td>34 to 75</td>
                    </tr>
                    <tr>
                        <td>Leafy Vegetables</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Milk 0% fat one glass</td>
                        <td>04</td>
                    </tr>
                    <tr>
                        <td>Icecream small cup</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Meat 3 Ozs.</td>
                        <td>82</td>
                    </tr>
                    <tr>
                        <td>Egg white</td>
                        <td>00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div><br><br><br>

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