<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";$database = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $user_id = $_POST['user_id'];
    $pincode = $_POST['pincode'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $package_category = $_POST['package_category'];
    $package_weight = $_POST['package_weight'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO user (user_id, pincode, area, city, package_weight, package_category) VALUES (?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("isssss", $user_id, $pincode, $area, $city, $package_weight, $package_category);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        header('Location: receiver.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
