<!DOCTYPE html>
<html>

<head>
    <title>Logout</title>
</head>

<body>
    <h1>Logout</h1>

    <form action="logout.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>

    <?php

    session_start();

    if (isset($_POST['logout'])) {

        session_destroy();
        echo "Session destroyed. You have been logged out.";
    }

    ?>
</body>

</html>