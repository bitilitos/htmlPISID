<?php
// Create a database connection
$servername = "localhost";
$username = "rita";
$password = "rita";
$dbname = "rats";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Construct SQL query
$sql = "SELECT IDExperiment FROM experiment";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Output table rows
while ($row = mysqli_fetch_assoc($result)) {
    echo "<td>" . $row['IDExperiment'] . "</td>";
}

// Close database connection
mysqli_close($conn);