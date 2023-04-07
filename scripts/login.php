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

// Process the login form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the login credentials against the database
    $sql = "SELECT current_role()";;
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Display an error message
        echo "Error: " . mysqli_error($conn);
    } else if (mysqli_num_rows($result) == 1) {
        // Redirect to the home page or the dashboard
        echo "Login successful.";
        header('Location: home.html');
        exit();
    } else {
        // Display an error message
        echo "Invalid login credentials. Please try again.";
    }
}

// Close the database connection
mysqli_close($conn);
?>