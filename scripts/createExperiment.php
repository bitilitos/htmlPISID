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
$r1 = 1;
$r2 = 2;
$r3 = 3;
$r4 = 4;
$r5 = 5;
$r6 = 6;
$r7 = 7;
$r8 = 8;
$r9 = 9;
$r10 = 10;
$morphine = $_POST['morphine'];
$diazepam = $_POST['diazepam'];
$thiocolchicoside = $_POST['thiocolchicoside'];
$paracetamol = $_POST['paracetamol'];
$diclofenac = $_POST['diclofenac'];
$acetylSalicylicAcid = $_POST['acetylSalicylicAcid'];
$tramadol = $_POST['tramadol'];
$dimenhydrinate = $_POST['dimenhydrinate'];
$metoclopramide = $_POST['metoclopramide'];
$domperidone = $_POST['domperidone'];
$s1 = "MOR";
$s2 = "DIA";
$s3 = "THI";
$s4 = "PAR";
$s5 = "DIC";
$s6 = "ACE";
$s7 = "TRA";
$s8 = "DIM";
$s9 = "MET";
$s10 = "DOM";

$sql0 = "INSERT INTO experiment (Description, Researcher, DateHour, RatsNumber, RatsRoomLimit,
        SecondsWithoutMovement, IdealTemperature, VaritionMaximumTemperature)
        VALUES ('$description', '$researcher', '$date', '$ratsNumber', '$ratsLimitPerRoom',
        '$secondsWithoutMovement', '$idealTemperature', '$varitionMaximumTemperature')";

if ($conn->query($sql0) === TRUE) {
    $experiment_id = mysqli_insert_id($conn);

    if (!empty($room1)) {
        $sql1 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r1', '$room1')";
        if ($conn->query($sql1) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room2)) {
        $sql2 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r2', '$room2')";
        if ($conn->query($sql2) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room3)) {
        $sql3 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r3', '$room3')";
        if ($conn->query($sql3) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room4)) {
        $sql4 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r4', '$room4')";
        if ($conn->query($sql4) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room5)) {
        $sql5 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r5', '$room5')";
        if ($conn->query($sql5) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room6)) {
        $sql6 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r6', '$room6')";
        if ($conn->query($sql6) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room7)) {
        $sql7 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r7', '$room7')";
        if ($conn->query($sql7) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room8)) {
        $sql8 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r8', '$room8')";
        if ($conn->query($sql8) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room9)) {
        $sql9 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r9', '$room9')";
        if ($conn->query($sql9) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room10)) {
        $sql10 = "INSERT INTO experimentodours (IDExperiment, Room, OdourCode) VALUES ('$experiment_id', '$r10', '$room10')";
        if ($conn->query($sql10) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($morphine)) {
        $sql11 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s1', '$morphine')";
        if ($conn->query($sql11) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($diazepam)) {
        $sql12 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s2', '$diazepam')";
        if ($conn->query($sql12) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($thiocolchicoside)) {
        $sql13 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s3', '$thiocolchicoside')";
        if ($conn->query($sql13) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($paracetamol)) {
        $sql14 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s4', '$paracetamol')";
        if ($conn->query($sql14) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($diclofenac)) {
        $sql15 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s5', '$diclofenac')";
        if ($conn->query($sql15) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($acetylSalicylicAcid)) {
        $sql16 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s6', '$acetylSalicylicAcid')";
        if ($conn->query($sql16) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($tramadol)) {
        $sql17 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s7', '$tramadol')";
        if ($conn->query($sql17) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($dimenhydrinate)) {
        $sql18 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s8', '$dimenhydrinate')";
        if ($conn->query($sql18) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($metoclopramide)) {
        $sql19 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s9', '$metoclopramide')";
        if ($conn->query($sql19) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($domperidone)) {
        $sql20 = "INSERT INTO experimentsubstances (IDExperiment, SubstanceCode, RatsNumber) VALUES ('$experiment_id', '$s10', '$domperidone')";
        if ($conn->query($sql20) === TRUE) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
} else {
    die("Database query failed.");
}