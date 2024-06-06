<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $mobileNumber = $_POST['mobileNumber'];
    $pincode = $_POST['pincode'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $state = $_POST['state'];


     // Generate random order ID (integer)
     $orderID = rand(100000, 999999); // Generates a random integer between 100000 and 999999


    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO delivery_address (orderID, name, mobileNumber, pincode, area, city, state) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("sssssss", $orderID, $name, $mobileNumber, $pincode, $area, $city, $state);


    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Data inserted successfully.</br>Your OrderID is $orderID";
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
