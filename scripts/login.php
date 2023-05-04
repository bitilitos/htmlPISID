<?php
// Create a database connection
$servername = "localhost";
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$username = $_POST["username"];
$password = $_POST["password"];
$dbname = "rats";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    header('Location: test.php');
    exit();
}

// Process the login form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the login credentials against the database
    $sql = "SELECT current_role()";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    } else if (mysqli_num_rows($result) == 1) {
        echo "Login successful.";
        header('Location: home.php');
        exit();
    } else {
        echo "Invalid login credentials. Please try again.";
    }
}

function sendAlert() {
    echo "<p>Invalid login credentials. Please try again.</p>";
}

// Close the database connection
mysqli_close($conn);
?>