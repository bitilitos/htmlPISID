<?php

// Create a database connection
$servername = "localhost";
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dsn = 'mysql:host=localhost;dbname=rats';

global $dbname;
$dbname = "rats";

// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

global $id;
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $endReason = $_POST['endReason'];
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare("CALL spFinishExperiment(:experimentId, :endReason)");

    // Assign the value of $id to $experimentId
    $experimentId = $id;

    // Bind the parameter values
    $stmt->bindParam(':experimentId', $experimentId, PDO::PARAM_INT);
    $stmt->bindParam(':endReason', $endReason, PDO::PARAM_INT);

    $stmt->execute();

    header('Location: home.php');
    exit();
}

// Close database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Experiment</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="endExperiment.css">
    <?php include 'home.php';?>
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div>
                <img src="images/back.png" class="icon" id="back"><a class="backLink" href="home.php">Go Back</a>
            </div>
            <div class="homeTitle">
                <h1 class="mainTitle"><span class="underline">E</span>nd Experiment</h1>
            </div>
            <br><br><br>
            <form method="post" action="">
                <div class="info-box-content">
                    <div class="dropdown">
                        <select class="select" id="endReason" name="endReason">
                            <option value="">Choose Experiment End Reason</option>
                            <option value="1">Successful Experiment</option>
                            <option value="2">Inactivity of Rats</option>
                            <option value="3">Temperature Limit</option>
                            <option value="4">Too many rats in the same room at the same time</option>
                            <option value="5">Time Limit</option>
                        </select>
                    </div>
                    <br><br><br><br><br>
                    <div>
                        <input class="submitButton" type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
</body>
</html>