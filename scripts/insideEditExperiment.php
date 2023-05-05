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

function getDescription() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.Description FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['Description'];
}

function getResearcher() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.Researcher FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['Researcher'];
}

function getDateHour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.DateHour FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['DateHour'];
}

function getRatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.RatsNumber FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['RatsNumber'];
}

function getRatsRoomLimit() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.RatsRoomLimit FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['RatsRoomLimit'];
}

function getSecondsWithoutMovement() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.SecondsWithoutMovement FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['SecondsWithoutMovement'];
}

function getIdealTemperature() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.IdealTemperature FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['IdealTemperature'];
}

function getVariationMaximumTemperature() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experiment.VariationMaximumTemperature FROM experiment WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['VariationMaximumTemperature'];
}

function getRoom1Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 1 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }

}

function getRoom2Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 2 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom3Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 3 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom4Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 4 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom5Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 5 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom6Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 6 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom7Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 7 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom8Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 8 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom9Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 9 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getRoom10Odour() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode FROM experimentodours WHERE Room = 10 AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['OdourCode'];
    }
}

function getSubstance1RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'MOR' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance2RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'DIA' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance3RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'THI' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance4RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'PAR' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance5RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'DIC' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance6RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'ACE' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance7RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'TRA' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance8RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'DIM' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance9RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'MET' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function getSubstance10RatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE SubstanceCode = 'DOM' AND IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)){
        echo $row['RatsNumber'];
    }
}

function editExperiment() {

    global $conn;
    global $dsn;
    global $username;
    global $password;
    global $id;

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
    $stmt = $pdo->prepare("CALL spUpdateExperiment(:description, :researcher, :ratsNumber, :ratsLimitPerRoom, :secondsWithoutMovement, :idealTemperature, :variationMaximumTemperature, :date, :IDExperiment)");

// Bind the parameter values
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':researcher', $researcher, PDO::PARAM_STR);
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    $stmt->bindParam(':ratsNumber', $ratsNumber, PDO::PARAM_INT);
    $stmt->bindParam(':ratsLimitPerRoom', $ratsLimitPerRoom, PDO::PARAM_INT);
    $stmt->bindParam(':secondsWithoutMovement', $secondsWithoutMovement, PDO::PARAM_INT);
    $stmt->bindParam(':idealTemperature', $idealTemperature, PDO::PARAM_INT);
    $stmt->bindParam(':variationMaximumTemperature', $variationMaximumTemperature, PDO::PARAM_INT);
    $stmt->bindParam(':IDExperiment', $id, PDO::PARAM_INT);

// Execute the stored procedure call
    $success = $stmt->execute();

    if ($success) {

        if (!empty($room1)) {
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateOdour(:experimentId, :room, :odourCode)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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
            $stmt = $pdo->prepare("CALL spUpdateSubstance(:experimentId, :substance, :ratsNumber)");
            $stmt->bindParam(':experimentId', $id, PDO::PARAM_INT);
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

    header('Location: experimentManagementHTML.php');
}

if (isset($_POST['edit'])) {
    editExperiment();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experiment</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="createExperiment.css">
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div>
                <img src="images/back.png" class="icon" id="back"><a class="backLink" href="home.php">Go Back</a>
            </div>
            <div class="homeTitle">
                <h1 class="mainTitle"><span class="underline">E</span>dit Experiment</h1>
            </div>
            <form method="POST" action="insideEditExperiment.php?id=<?php echo $id; ?>">
                <div class="info-box-content">
                    <div class="leftColumn">
                        <img src="images/description.png" class="icon"><textarea class="descriptionTextArea" name="description" cols="40" rows="5" required><?php getDescription();?></textarea>
                        <br><br>
                        <img src="images/researcher.png" class="icon"><input class="createExperimentInput" type="text" name="researcher" value="<?php getResearcher();?>" required>
                        <br><br>
                        <img src="images/calendar.png" class="icon"><input class="createExperimentInput" id="datetime" type="datetime-local" min="" name="date" value="<?php echo getDateHour();?>" required>
                    </div>
                    <div class="rightColumn">
                        <img src="images/numbers.png" class="icon"><input class="createExperimentInput" type="number" min="1" max="100" name="ratsNumber" id="ratsNumber" value="<?php echo getRatsNumber(); ?>" required>
                        <br><br>
                        <img src="images/rat.png" class="icon"><input class="createExperimentInput" type="number" min="1" max="100" name="ratsLimitPerRoom" value="<?php echo getRatsRoomLimit();?>" required>
                        <br><br>
                        <img src="images/hand.png" class="icon"><input class="createExperimentInput" type="number" min="1" max="30" name="secondsWithoutMovement" value="<?php echo getSecondsWithoutMovement();?>" required>
                        <br><br>
                        <img src="images/thermometer.png" class="icon"><input class="createExperimentInput" type="number" step="any" name="idealTemperature" value="<?php echo getIdealTemperature();?>" required>
                        <br><br>
                        <img src="images/variation.png" class="icon"><input class="createExperimentInput" type="number" min="1" max="5" step="any" name="variationMaximumTemperature" value="<?php echo getVariationMaximumTemperature();?>" required>
                    </div>
                </div>
                <div class="info-box-content">
                    <div class="dropdowns">
                        <img src="images/smell.png" class="icon"><select class="selects" id="room1" name="room1">
                            <option value="<?php echo getRoom1Odour();?>">Room 1: <?php echo getRoom1Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room2" name="room2">
                            <option value="<?php echo getRoom2Odour();?>">Room 2: <?php echo getRoom2Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room3" name="room3">
                            <option value="<?php echo getRoom3Odour();?>">Room 3: <?php echo getRoom3Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room4" name="room4">
                            <option value="<?php echo getRoom4Odour();?>">Room 4: <?php echo getRoom4Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room5" name="room5">
                            <option value="<?php echo getRoom5Odour();?>">Room 5: <?php echo getRoom5Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room6" name="room6">
                            <option value="<?php echo getRoom6Odour();?>">Room 6: <?php echo getRoom6Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room7" name="room7">
                            <option value="<?php echo getRoom7Odour();?>">Room 7: <?php echo getRoom7Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room8" name="room8">
                            <option value="<?php echo getRoom8Odour();?>">Room 8: <?php echo getRoom8Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room9" name="room9">
                            <option value="<?php echo getRoom9Odour();?>">Room 9: <?php echo getRoom9Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room10" name="room10">
                            <option value="<?php echo getRoom10Odour();?>">Room 10: <?php echo getRoom10Odour();?></option>
                            <option value="">Remove odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                    </div>
                    <div class="dropdowns">
                        <img src="images/substance.png" class="icon"><select class="selects" id="morphine" name="morphine">
                            <option value="<?php echo getSubstance1RatsNumber();?>">Morphine: <?php echo getSubstance1RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="diazepam" name="diazepam">
                            <option value="<?php echo getSubstance2RatsNumber();?>">Diazepam: <?php echo getSubstance2RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="thiocolchicoside" name="thiocolchicoside">
                            <option value="<?php echo getSubstance3RatsNumber();?>">Thiocolchicoside: <?php echo getSubstance3RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="paracetamol" name="paracetamol">
                            <option value="<?php echo getSubstance4RatsNumber();?>">Paracetamol: <?php echo getSubstance4RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="diclofenac" name="diclofenac">
                            <option value="<?php echo getSubstance5RatsNumber();?>">Diclofenac: <?php echo getSubstance5RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="acetylSalicylicAcid" name="acetylSalicylicAcid">
                            <option value="<?php echo getSubstance6RatsNumber();?>">Acetyl Salicylic Acid: <?php echo getSubstance6RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="tramadol" name="tramadol">
                            <option value="<?php echo getSubstance7RatsNumber();?>">Tramadol: <?php echo getSubstance7RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="dimenhydrinate" name="dimenhydrinate">
                            <option value="<?php echo getSubstance8RatsNumber();?>">Dimenhydrinate: <?php echo getSubstance8RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="metoclopramide" name="metoclopramide">
                            <option value="<?php echo getSubstance9RatsNumber();?>">Metoclopramide: <?php echo getSubstance9RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                        <br><br>
                        <img src="images/substance.png" class="icon"><select class="selects" id="domperidone" name="domperidone">
                            <option value="<?php echo getSubstance10RatsNumber();?>">Domperidone: <?php echo getSubstance10RatsNumber();?></option>
                            <option value="">0</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="edit" class="editExperiment" value="Edit Experiment" onclick="counter(event)">
            </form>
        </div>
    </section>
</main>
</body>
</html>

<script>
    const now = new Date();
    const timezoneOffset = now.getTimezoneOffset() * 60000;
    const minDate = new Date(now - timezoneOffset).toISOString().slice(0, 16);
    document.getElementById("datetime").setAttribute("min", minDate);

    function counter(event) {
        var counter = 0;
        var ratsNumber = document.getElementById("ratsNumber").value;
        var domperidone = document.getElementById("domperidone").value;
        var metoclopramide = document.getElementById("metoclopramide").value;
        var dimenhydrinate = document.getElementById("dimenhydrinate").value;
        var tramadol = document.getElementById("tramadol").value;
        var acetylSalicylicAcid = document.getElementById("acetylSalicylicAcid").value;
        var diclofenac = document.getElementById("diclofenac").value;
        var paracetamol = document.getElementById("paracetamol").value;
        var thiocolchicoside = document.getElementById("thiocolchicoside").value;
        var diazepam = document.getElementById("diazepam").value;
        var morphine = document.getElementById("morphine").value;

        counter = +domperidone + +metoclopramide + +dimenhydrinate + +tramadol + +acetylSalicylicAcid + +diclofenac + +paracetamol + +thiocolchicoside + +diazepam + +morphine;

        if (counter > ratsNumber) {
            alert("Only the number of rats defined above may be injected with substances!");
            event.preventDefault();
        } else {
            document.querySelector('form').submit();
        }
    }
</script>