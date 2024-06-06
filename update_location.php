<?php
// Replace these variables with your actual database credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'registration';

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if latitude and longitude parameters are provided
if (isset($_GET["latitude"], $_GET["longitude"])) {
    $latitude = $_GET["latitude"];
    $longitude = $_GET["longitude"];

    // Update the user's location in the database (assuming you have a 'users' table)
    $sql = "UPDATE user SET latitude = '$latitude', longitude = '$longitude' WHERE user_id = 1"; // Adjust the WHERE clause based on your user identification method
    if ($conn->query($sql) === TRUE) {
        echo "User location updated successfully.";
    } else {
        echo "Error updating user location: " . $conn->error;
    }
} else {
    echo "Latitude and longitude parameters are required.";
}

// Close the database connection
$conn->close();
?>
