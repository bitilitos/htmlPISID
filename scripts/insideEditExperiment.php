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

function getRoomsOdours() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentodours.OdourCode, $dbname.experimentodours.Room FROM experimentodours WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td class='tdicon'></td>";
        echo "<td>" . $row['Room'] . "</td>";
        echo "<td>" . $row['OdourCode'] . "</td>";
        echo "</tr>";
    }
}

function getSubstancesRatsNumber() {
    global $conn;
    global $dbname;
    global $id;
    $sql = "SELECT $dbname.experimentsubstances.SubstanceCode, $dbname.experimentsubstances.RatsNumber FROM experimentsubstances WHERE IDExperiment = " . $id;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td class='tdicon'></td>";
        echo "<td>" . $row['SubstanceCode'] . "</td>";
        echo "<td>" . $row['RatsNumber'] . "</td>";
        echo "</tr>";
    }
}

function deleteExperiment() {
    global $conn;
    global $dsn;
    global $username;
    global $password;
    global $id;

    $pdo = new PDO($dsn, $username, $password);

    $stmt = $pdo->prepare("CALL spDeleteExperiment(:idExperiment)");
    $stmt->bindParam(':idExperiment', $id, PDO::PARAM_INT);
    $success = $stmt->execute();


    if ($success) {
        echo "Experiment deleted successfully.";
    } else {
        echo "Error deleting Experiment: " . $conn->error;
    }
    header('Location: experimentManagementHTML.php');
}

if (isset($_POST['delete'])) {
    deleteExperiment();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Management</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="insideExperiment.css">
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
                <table class="info-box-table" id="table2">
                    <thead>
                    <tr>
                        <th class="tdicon"><img src="images/smell.png" class="iconManagement"></th>
                        <th class="tdtitle">Room</th>
                        <th>Odour Code</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php getRoomsOdours();?>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="info-box-content">
                <table class="info-box-table" id="table3">
                    <thead>
                    <tr>
                        <th class="tdicon"><img src="images/substance.png" class="iconManagement"></th>
                        <th class="tdtitle">Substance Code</th>
                        <th>Rats Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php getSubstancesRatsNumber();?>
                    </tbody>
                </table>
            </div>
            <br><br>
            <div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="edit" class="editExperiment" value="Edit Experiment">
                </form>
            </div>
        </div>
    </section>
</main>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Experiment</title>
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
                <h1 class="mainTitle"><span class="underline">C</span>reate Experiment</h1>
            </div>
            <form method="post" action="createExperiment.php">
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
                            <option value="">Room 1 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room2" name="room2">
                            <option value="">Room 2 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room3" name="room3">
                            <option value="">Room 3 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room4" name="room4">
                            <option value="">Room 4 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room5" name="room5">
                            <option value="">Room 5 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room6" name="room6">
                            <option value="">Room 6 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room7" name="room7">
                            <option value="">Room 7 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room8" name="room8">
                            <option value="">Room 8 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room9" name="room9">
                            <option value="">Room 9 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                        <br><br>
                        <img src="images/smell.png" class="icon"><select class="selects" id="room10" name="room10">
                            <option value="">Room 10 - Choose Odour</option>
                            <option value="VAN">Vanilla</option>
                            <option value="CHO">Chocolate</option>
                            <option value="COF">Coffee</option>
                        </select>
                    </div>
                    <div class="dropdowns">
                        <img src="images/substance.png" class="icon"><select class="selects" id="morphine" name="morphine">
                            <option value="">Morphine - Choose Number of Rats Injected</option>
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
                            <option value="">Diazepam - Choose Number of Rats Injected</option>
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
                            <option value="">Thiocolchicoside - Choose Number of Rats Injected</option>
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
                            <option value="">Paracetamol - Choose Number of Rats Injected</option>
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
                            <option value="">Diclofenac - Choose Number of Rats Injected</option>
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
                            <option value="">Acetyl Salicylic Acid - Choose Number of Rats Injected</option>
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
                            <option value="">Tramadol - Choose Number of Rats Injected</option>
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
                            <option value="">Dimenhydrinate - Choose Number of Rats Injected</option>
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
                            <option value="">Metoclopramide - Choose Number of Rats Injected</option>
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
                            <option value="">Domperidone - Choose Number of Rats Injected</option>
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
                <input class="submitButton" type="submit" value="Submit" onclick="counter(event)">
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

        counter = domperidone + metoclopramide + dimenhydrinate + tramadol + acetylSalicylicAcid + diclofenac + paracetamol + thiocolchicoside + diazepam + morphine;

        if (counter > ratsNumber) {
            alert("Only the number of rats defined above may be injected with substances!");
            event.preventDefault();
        } else {
            document.querySelector('form').submit();
        }
    }
</script>
</script>