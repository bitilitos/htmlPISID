<?php

// Create a database connection
$servername = "localhost";
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

global $dbname;
$dbname = "rats";

// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function getActiveExperiment() {
    global $conn;
    global $dbname;
    $sql = "SELECT $dbname.experiment.IDExperiment FROM experiment WHERE IsActive = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)) {
        $id = $row['IDExperiment'];
        echo "<a class='endExperiment' href='insideEndExperiment.php?id=$id'><br>End Experiment</a>";
    } else {
        echo "<a class='endExperiment' href='#' style='cursor: default'><br>No Active Experiment</a>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div class="homeTitle">
                <h1 class="homeTitle"><span class="underline">W</span>elcome</h1>
            </div>
            <div class="info-box-content">
                <div class="leftButton">
                    <a class="createExperiment" href="createExperiment.html"><br>Create Experiment</a>
                </div>
                <div class="centerButton">
                    <?php getActiveExperiment();?>
                </div>
                <div class="rightButton">
                    <a class="experimentManagement" href="experimentManagementHTML.php"><br>Experiment Management</a>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>