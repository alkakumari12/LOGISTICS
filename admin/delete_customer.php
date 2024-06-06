<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['customerID'])) {
    $customerID = $_GET['customerID'];

    // Prepare a statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM signup_frm WHERE user_id = ?");
    $stmt->bind_param("i", $customerID);

    if ($stmt->execute()) {
        // Use JavaScript to show a popup message and redirect
        echo "<script>
                alert('Customer deleted successfully');
                window.location.href = 'customers.php';
              </script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
