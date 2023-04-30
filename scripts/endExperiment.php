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

global $id;
$id = $_GET['id'];




header('Location: home.php');
exit();

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
            <form method="post" action="endExperiment.php">
                <div class="info-box-content">
                    <div class="dropdown">
                        <select class="select" id="endReason" name="endReason">
                            <option value="">Choose Experiment End Reason</option>
                            <option value="SuccessfulExperiment">Successful Experiment</option>
                            <option value="InactivityRats">Inactivity of Rats</option>
                            <option value="TemperatureLimit">Temperature Limit</option>
                            <option value="TooManyRats">Too many rats in the same room at the same time</option>
                            <option value="TimeLimit">Time Limit</option>
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