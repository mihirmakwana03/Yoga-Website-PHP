<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="yoga.css">
  <title>Path of Light Yogo Studio</title>
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

  <img src="images/pexels-bich-tran-760710.jpg" alt="Lounge" style="width:750px;height:400px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); animation: imageAnimation 5s infinite;">

  <div id="wrapper">
    <h2>Yoga Schedule</h2>
    <p style="margin-left: 40px">Mats, blocks and blankets provided. Please arrive 10 minutes before your class begins.
      Relax in our Serenity Lounge beofre or after your class.</p>

    <?php
    $sql1 = "SELECT daysname FROM days";
    $i = 0;
    require 'connection/connection.php';
    if ($conn->query($sql1) === false) {
      echo "Error: " . $sql1 . "<br />" . $conn->error . "<br />";
    } else {
      $result1 = $conn->query($sql1);
      if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
          echo "<h3 style = 'font-weight: normal;' > " . $row1['daysname'] . " </h3>";

          if ($i === 0) {
            $sql2 = " SELECT t.time, c.classname from time t, class c, schedule s where t.timeid = s.timeid and c.classid = s.classid and s.daysid = 'weekday'; ";
            require 'connection/connection.php';
            if ($conn->query($sql2) === false) {
              echo "Error: " . $sql2 . "<br />" . $conn->error . "<br />";
            } else {
              $result2 = $conn->query($sql2);
              if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
                  echo "
                 <ul>
                 <li>" . $row2['time'] . "  " . $row2['classname'] . " </li>
                 </ul>";
                  $i++;
                }
              }
            }
          } else {
            $sql3 = " SELECT t.time, c.classname from time t, class c, schedule s where t.timeid = s.timeid and c.classid = s.classid and s.daysid = 'weekend'; ";
            require 'connection/connection.php';
            if ($conn->query($sql3) === false) {
              echo "Error: " . $sql3 . "<br />" . $conn->error . "<br />";
            } else {
              $result3 = $conn->query($sql3);
              if ($result3->num_rows > 0) {
                while ($row3 = $result3->fetch_assoc()) {
                  echo "
                 <ul>
                 <li>" . $row3['time'] . "  " . $row3['classname'] . " </li>
                 </ul>";
                }
              }
            }
          }
        }
      }
    }

    ?>
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