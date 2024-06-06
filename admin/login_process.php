<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin_users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: home.php");
        exit;
    } else {
        $_SESSION['login_message'] = 'Invalid username or password';
        header("Location: index.php");
        exit;
    }
} else {
    $_SESSION['login_message'] = 'Invalid username or password';
    header("Location:index.php");
    exit;
}

$stmt->close();
$conn->close();
?>
