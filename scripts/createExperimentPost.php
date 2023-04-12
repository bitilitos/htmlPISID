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
$room1 = $_POST['room1'];
$room2 = $_POST['room2'];
$room3 = $_POST['room3'];
$room4 = $_POST['room4'];
$room5 = $_POST['room5'];
$room6 = $_POST['room6'];
$room7 = $_POST['room7'];
$room8 = $_POST['room8'];
$room9 = $_POST['room9'];
$room10 = $_POST['room10'];
$n1 = 1;
$n2 = 2;
$n3 = 3;
$n4 = 4;
$n5 = 5;
$n6 = 6;
$n7 = 7;
$n8 = 8;
$n9 = 9;
$n10 = 10;

$sql0 = "INSERT INTO experiment (Description, Researcher, DateHour, RatsNumber, RatsRoomLimit,
        SecondsWithoutMovement, IdealTemperature, VaritionMaximumTemperature)
        VALUES ('$description', '$researcher', '$date', '$ratsNumber', '$ratsLimitPerRoom',
        '$secondsWithoutMovement', '$idealTemperature', '$varitionMaximumTemperature')";

if ($conn->query($sql0) === TRUE) {
    $experiment_id = mysqli_insert_id($conn);

    if (!empty($room1)) {
        $sql1 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n1', '$room1')";
        if ($conn->query($sql1) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room2)) {
        $sql2 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n2', '$room2')";
        if ($conn->query($sql2) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room3)) {
        $sql3 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n3', '$room3')";
        if ($conn->query($sql3) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room4)) {
        $sql4 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n4', '$room4')";
        if ($conn->query($sql4) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room5)) {
        $sql5 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n5', '$room5')";
        if ($conn->query($sql5) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room6)) {
        $sql6 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n6', '$room6')";
        if ($conn->query($sql6) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room7)) {
        $sql7 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n7', '$room7')";
        if ($conn->query($sql7) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room8)) {
        $sql8 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n8', '$room8')";
        if ($conn->query($sql8) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room9)) {
        $sql9 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n9', '$room9')";
        if ($conn->query($sql9) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room10)) {
        $sql10 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$n10', '$room10')";
        if ($conn->query($sql10) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
} else {
    die("Database query failed.");
}