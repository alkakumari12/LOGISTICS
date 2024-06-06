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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['track_no'])) {
    // Collect form data
    $trackingID = $_POST['track_no'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("SELECT * FROM pickup_address WHERE track_no = ?");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("s", $track_no);

    // Execute the statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Output the details or use them as needed
                echo "Name: " . $row['name'] . "<br>";
                echo "Mobile Number: " . $row['mobileNumber'] . "<br>";
                echo "Pincode: " . $row['pincode'] . "<br>";
                echo "Area: " . $row['area'] . "<br>";
                echo "City: " . $row['city'] . "<br>";
                echo "Package Category: " . $row['package_category'] . "<br>";
                echo "Package Weight: " . $row['package_weight'] . "<br>";
            } else {
                echo "Tracking number not found.";
            }
        } else {
            echo "Error fetching results: " . $stmt->error;
        }

        // Free result set
        $result->free_result();
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();


?>
