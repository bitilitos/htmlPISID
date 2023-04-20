<?php
// Create a database connection
$servername = "localhost";
$username = "rita";
$password = "rita";
$dbname = "rats";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Construct SQL query
$sql = "SELECT $dbname.experiment.IDExperiment FROM experiment";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Output table rows
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['IDExperiment'] . "</td>";
    echo "<td><a href=''><img src='images/touchscreen.png' class='icon'></a></td>";
    echo "</tr>";
}

// Close database connection
mysqli_close($conn);