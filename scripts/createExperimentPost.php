<?php
// Create a database connection
$servername = "localhost";
$username = "rita";
$password = "rita";
$dbname = "rats";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$description = $_POST['description'];
$researcher = $_POST['researcher'];
$date = $_POST['date'];
$ratsNumber = $_POST['ratsNumber'];
$ratsLimitPerRoom = $_POST['ratsLimitPerRoom'];
$secondsWithoutMovement = $_POST['secondsWithoutMovement'];
$idealTemperature = $_POST['idealTemperature'];
$varitionMaximumTemperature = $_POST['varitionMaximumTemperature'];

$sql = "INSERT INTO experiment (Description, Researcher, DateHour, RatsNumber, RatsRoomLimit,
        SecondsWithoutMovement, IdealTemperature, VaritionMaximumTemperature)
        VALUES ('$description', '$researcher', '$date', '$ratsNumber', '$ratsLimitPerRoom',
        '$secondsWithoutMovement', '$idealTemperature', '$varitionMaximumTemperature')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}