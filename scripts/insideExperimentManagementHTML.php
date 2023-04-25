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

function getResearcher() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.Researcher FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['Researcher'] . "</td>";
}

function getDateHour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.DateHour FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['DateHour'] . "</td>";
}

function getRatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.RatsNumber FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['RatsNumber'] . "</td>";
}

function getRatsRoomLimit() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.RatsRoomLimit FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['RatsRoomLimit'] . "</td>";
}

function getSecondsWithoutMovement() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.SecondsWithoutMovement FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['SecondsWithoutMovement'] . "</td>";
}

function getIdealTemperature() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.IdealTemperature FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['IdealTemperature'] . "</td>";
}

function getVaritionMaximumTemperature() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.VaritionMaximumTemperature FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<td>" . $row['VaritionMaximumTemperature'] . "</td>";
}

function getRooms() {
    global $conn;
    global $dbname;
    global $id;
    $sqlRoom = "SELECT $dbname.experimentodours.Room FROM experimentodours WHERE IDExperiment = " . $id;
    $resultRoom = mysqli_query($conn, $sqlRoom);
    while ($row = mysqli_fetch_array($resultRoom)) {
        echo "<td>" . $row['Room'] . "</td>";
    }
}

function getOdours() {
    global $conn;
    global $dbname;
    global $id;
    $sqlOdour = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE IDExperiment = " . $id;
    $resultOdour = mysqli_query($conn, $sqlOdour);
    while ($row = mysqli_fetch_array($resultOdour)) {
        echo "<td>" . $row['OdourCode'] . "</td>";
    }
}

function getSubstances() {
    global $conn;
    global $dbname;
    global $id;
    $sqlRoom = "SELECT $dbname.experimentsubstances.SubstanceCode FROM experimentsubstances WHERE IDExperiment = " . $id;
    $resultRoom = mysqli_query($conn, $sqlRoom);
    while ($row = mysqli_fetch_array($resultRoom)) {
        echo "<td>" . $row['SubstanceCode'] . "</td>";
    }
}

function getInjectedRatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sqlOdour = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE IDExperiment = " . $id;
    $resultOdour = mysqli_query($conn, $sqlOdour);
    while ($row = mysqli_fetch_array($resultOdour)) {
        echo "<td>" . $row['RatsNumber'] . "</td>";
    }
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
    <?php include 'experimentManagement.php';?>
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div>
                <img src="images/back.png" class="icon" id="back"><a class="backLink" href="experimentManagementHTML.php">Go Back</a>
            </div>
            <div class="homeTitle">
                <h1 class="mainTitle"><span class="underline">E</span>xperiment Management</h1>
            </div>
            <div class="info-box-content">
                <table class="info-box-table">
                    <tbody>
                    <tr>
                        <td>Description</td>
                        <?php getDescription();?>
                    </tr>
                    <tr>
                        <td>Researcher</td>
                        <?php getResearcher();?>
                    </tr>
                    <tr>
                        <td>Date of Start of Experiment</td>
                        <?php getDateHour();?>
                    </tr>
                    <tr>
                        <td>Rats Number</td>
                        <?php getRatsNumber();?>
                    </tr>
                    <tr>
                        <td>Rats Limit Per Room</td>
                        <?php getRatsRoomLimit();?>
                    </tr>
                    <tr>
                        <td>Seconds Without Movement</td>
                        <?php getSecondsWithoutMovement();?>
                    </tr>
                    <tr>
                        <td>Ideal Temperature</td>
                        <?php getIdealTemperature();?>
                    </tr>
                    <tr>
                        <td>Varition Maximum Temperature</td>
                        <?php getVaritionMaximumTemperature();?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
            <div class="info-box-content">
                <table class="info-box-table">
                    <thead>
                        <tr>
                            <th>Room</th>
                            <th>Odour Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php getRooms();?>
                            <?php getOdours();?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-box-content">
                <table class="info-box-table">
                    <thead>
                    <tr>
                        <th>Substance Code</th>
                        <th>Rats Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php getSubstances();?>
                        <?php getInjectedRatsNumber();?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
</body>
</html>