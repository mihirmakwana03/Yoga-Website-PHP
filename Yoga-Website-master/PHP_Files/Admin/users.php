<?php
require 'admin.php';

$conn = new mysqli("localhost", "root", "", "wdm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$users_query = "SELECT * FROM users";
$users_result = $conn->query($users_query);

$users_count = $users_result->num_rows;

$conn->close();


?>

<div class="wrap2">
        <h2>Users Data</h2>
        <p>Total Users: <?php echo $users_count; ?></p>
        <table style="text-align: center;">
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>State</th>
                <th>City</th>
            </tr>
            <?php

            while ($row = $users_result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
            }
            ?>
        </table>
    </div>
    