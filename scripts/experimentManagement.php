<?php

// Create a database connection
$servername = "localhost";
$username = "rita";
$password = "rita";

global $dbname;
$dbname = "rats";

// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function getID() {
    global $conn;
    global $dbname;
    $sql = "SELECT $dbname.experiment.IDExperiment FROM experiment";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['IDExperiment'] . "</td>";
        $id = $row['IDExperiment'];
        echo "<td><a href='insideExperimentManagementHTML.php?id=$id'><img src='images/touchscreen.png' class='icon'></a></td>";
        echo "<td><a href='insideExperimentManagementHTML.php?id=$id'><img src='images/trash.png' class='icon'></a></td>";
        echo "</tr>";
    }
}
