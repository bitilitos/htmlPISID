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

function getID() {
    global $conn;
    global $dbname;
    $sql = "SELECT $dbname.experiment.IDExperiment FROM experiment";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['IDExperiment'] . "</td>";
        $id = $row['IDExperiment'];
        echo "<td><a href='insideExperimentManagementHTML.php?id=$id'><img src='images/touchscreen.png' class='icon'></a></td>";
        echo "<td><a href='#' onclick='<?php createModal($id); ?>'><img src='images/trash.png' class='icon'></a></td>";
        echo "</tr>";
    }
}

function createModal($id) {
    echo '
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>"Are you sure?"</p>
        <p>"You will not be able to recover this experiment!"</p>
        <button class="cancelButton">Cancel</button>
        <button onclick="deleteExperiment($id)">Yes, delete it!/button>
      </div>
    </div>
    
    <script>
      var modal = document.getElementById("myModal");
      var span = document.getElementsByClassName("close")[0];
      var cancel = document.getElementsByClassName("cancelButton")[0];
      span.onclick = function() {
        modal.style.display = "none";
      }
      cancel.onclick = function() {
        modal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
  ';
}

