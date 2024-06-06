<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$user_id = $_SESSION['user_id'];

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

if (isset($_GET['orderID'])) {
    $orderID = intval($_GET['orderID']);
    
    // Ensure that the order belongs to the logged-in user
    $check_order_query = "SELECT * FROM orders WHERE orderID = $orderID AND user_id = $user_id";
    $result = $conn->query($check_order_query);

    if ($result->num_rows > 0) {
        // Cancel the order
        $cancel_order_query = "DELETE FROM orders WHERE orderID = $orderID AND user_id = $user_id";
        
        if ($conn->query($cancel_order_query) === TRUE) {
            echo "Order canceled successfully.";
        } else {
            echo "Error canceling order: " . $conn->error;
        }
    } else {
        echo "Order not found or you do not have permission to cancel this order.";
    }
} else {
    echo "No orderID specified.";
}

$conn->close();
?>

<a href="orders.php">Back to Orders</a>
