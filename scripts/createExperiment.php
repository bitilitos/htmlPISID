<?php
// Create a database connection
$servername = "localhost";
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = "rats";
$dsn = 'mysql:host=localhost;dbname=rats';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$description = $_POST['description'];
$researcher = $_POST['researcher'];
$date = $_POST['date'];
$ratsNumber = $_POST['ratsNumber'];
$ratsLimitPerRoom = $_POST['ratsLimitPerRoom'];
$secondsWithoutMovement = $_POST['secondsWithoutMovement'];
$idealTemperature = $_POST['idealTemperature'];
$variationMaximumTemperature = $_POST['variationMaximumTemperature'];
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

$pdo = new PDO($dsn, $username, $password);

// Prepare the stored procedure call
$stmt = $pdo->prepare("CALL spCreateExperiment(:description, :researcher, :ratsNumber, :ratsLimitPerRoom, :secondsWithoutMovement, :idealTemperature, :variationMaximumTemperature, :date)");

// Bind the parameter values
$stmt->bindParam(':description', $description, PDO::PARAM_STR);
$stmt->bindParam(':researcher', $researcher, PDO::PARAM_STR);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);
$stmt->bindParam(':ratsNumber', $ratsNumber, PDO::PARAM_INT);
$stmt->bindParam(':ratsLimitPerRoom', $ratsLimitPerRoom, PDO::PARAM_INT);
$stmt->bindParam(':secondsWithoutMovement', $secondsWithoutMovement, PDO::PARAM_INT);
$stmt->bindParam(':idealTemperature', $idealTemperature, PDO::PARAM_INT);
$stmt->bindParam(':variationMaximumTemperature', $variationMaximumTemperature, PDO::PARAM_INT);

// Execute the stored procedure call
$success = $stmt->execute();

if ($success) {
    $experiment_id = $pdo->query("SELECT LAST_INSERT_ID()")->fetchColumn();

    if (!empty($room1)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r1, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room1, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room2)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r2, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room2, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room3)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r3, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room3, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room4)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r4, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room4, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room5)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r5, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room5, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room6)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r6, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room6, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room7)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r7, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room7, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room8)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r8, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room8, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room9)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r9, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room9, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($room10)) {
        $stmt = $pdo->prepare("CALL spCreateOdour(:experimentId, :room, :odourCode)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':room', $r10, PDO::PARAM_INT);
        $stmt->bindParam(':odourCode', $room10, PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($morphine)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s1, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $morphine, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($diazepam)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s2, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $diazepam, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($thiocolchicoside)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s3, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $thiocolchicoside, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($paracetamol)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s4, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $paracetamol, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($diclofenac)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s4, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $diclofenac, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($acetylSalicylicAcid)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s6, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $acetylSalicylicAcid, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($tramadol)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s7, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $tramadol, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($dimenhydrinate)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s8, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $dimenhydrinate, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($metoclopramide)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s9, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $metoclopramide, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
    if (!empty($domperidone)) {
        $stmt = $pdo->prepare("CALL spCreateSubstance(:experimentId, :substance, :ratsNumber)");
        $stmt->bindParam(':experimentId', $experiment_id, PDO::PARAM_INT);
        $stmt->bindParam(':substance', $s10, PDO::PARAM_STR);
        $stmt->bindParam(':ratsNumber', $domperidone, PDO::PARAM_INT);
        $success = $stmt->execute();

        if ($success) {
            echo "Database query succeeded.";
        } else {
            echo "Database query failed.";
        }
    }
} else {
    die("Database query failed.");
}

header('Location: home.php');
exit();

// Close database connection
mysqli_close($conn);