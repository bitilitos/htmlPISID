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

function getDescription() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.Description FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['Description'] . "</td>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Management</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="experimentManagement.css">
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div>
                <img src="images/back.png" class="icon" id="back"><a class="backLink" href="home.html">Go Back</a>
            </div>
            <div class="homeTitle">
                <h1 class="mainTitle"><span class="underline">E</span>xperiment Management</h1>
                <php include echo $foo = $_GET['foo']; ?>
            </div>
            <div class="info-box-content">
                <table class="info-box-table">
                    <tbody>
                    <tr>
                        <td>Description</td>
                        <?php
                        include 'experimentManagement.php';
                        getDescription();?>
                    </tr>
                    <tr>
                        <td>Researcher</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
</body>
</html>