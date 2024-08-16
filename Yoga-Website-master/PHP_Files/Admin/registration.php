<?php
require 'admin.php';

$conn = new mysqli("localhost", "root", "", "wdm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registrations_query = "SELECT * FROM yoga_registrations";
$registrations_result = $conn->query($registrations_query);

// Count the number of records
$registrations_count = $registrations_result->num_rows;

if ($registrations_count > 0) {
?>

<div class="wrap2">
    <h2>Yoga Registrations</h2>
    <p>Total Registrations: <?php echo $registrations_count; ?></p>
    <table style="text-align: center;">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Session</th>
            <th>Date</th>
            <th>Time</th>
            <th>Free Trial</th>
        </tr>
        <?php
        while ($row = $registrations_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['session'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['free_trial'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
} else {
    echo "No registrations found.";
}

$conn->close();