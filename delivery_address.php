<?php
session_start();
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
    $user_id = $_POST['userid'];
    $receiver_name = $_POST['receiver_name'];
    $receiver_mobileNumber = $_POST['receiver_mobileNumber'];
    $receiver_pincode = $_POST['receiver_pincode'];
    $receiver_area = $_POST['receiver_area'];
    $receiver_city = $_POST['receiver_city'];
    $receiver_state = $_POST['receiver_state'];
     // Generate random order ID (integer)
     $orderID = rand(0, 999999999); 
     $price = rand(0,99999);
    // Generates a random integer between 100000 and 999999


    // Prepare and bind SQL statement
    // $stmt = $conn->prepare("INSERT INTO users (orderID, receiver_name, receiver_mobileNumber, receiver_pincode, receiver_area, receiver_city, receiver_state) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt = $conn->prepare("UPDATE user SET orderID=?, receiver_name=? , receiver_mobileNumber=? , receiver_pincode=? , receiver_area=? , receiver_city=? , receiver_state=? WHERE user_id = ? ");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("sssssssi", $orderID , $receiver_name, $receiver_mobileNumber, $receiver_pincode, $receiver_area, $receiver_city, $receiver_state, $user_id);


    // Execute the statement
    if ($stmt->execute() === TRUE) {

        $stmt = $conn->prepare("INSERT INTO orders(user_id, receiver_name, receiver_mobileNumber, receiver_pincode, receiver_area, orderID,price, receiver_state) values(?,?,?,?,?,?,?,?)");
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("isssssss", $user_id, $receiver_name, $receiver_mobileNumber, $receiver_pincode, $receiver_area, $orderID,$price, $receiver_state);
        if ($stmt->execute() === TRUE) {

            $_SESSION['message']="$name  Your data inserted successfully.</br>Your OrderID is $orderID";
            header("location:orders.php?user_id=$user_id");
            exit();
        }
    
        
        // echo "Data inserted successfully.</br>Your OrderID is $orderID";
        // header('Location:index.php');
        // echo "Data inserted successfully.</br>Your OrderID is $orderID";
        // exit();
    } 
    else
    {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// $response = array('orderID' => $orderID);
// echo json_encode($response);
// Close connection
$conn->close();
?>
<!-- <script src="js/main.js"></script> -->