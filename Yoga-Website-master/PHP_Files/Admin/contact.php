<?php
require 'admin.php';

$conn = new mysqli("localhost", "root", "", "wdm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$contact_query = "SELECT * FROM contact";
$contact_result = $conn->query($contact_query);

$contact_count = $contact_result->num_rows;

$conn->close();

?>

<div class="wrap2">
        <h2>Contact Queries</h2>
        <p>Total Queries: <?php echo $contact_count; ?></p>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Comments</th>
            </tr>
            <?php
            while ($row = $contact_result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['comments'] . "</td>";
                echo "<td><a href='mailto:" . $row['email'] . "?subject=" . urlencode($row['comments']) . "'>Send Email</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    
    <br><br><br><br><br><br><br><br>