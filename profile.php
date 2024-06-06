<?php
session_start();

// Check if the user is not logged in, redirect them to the login page
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}

// Here you can fetch user data from your database or any other source
// For the sake of example, let's assume you have a user profile stored in $_SESSION['profile']
// You can replace this with your actual implementation to fetch user data
$profile = $_SESSION['profile']; // Assuming you store user profile information in $_SESSION['profile']

// Display the user's profile information
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo $profile['name']; ?>!</h1>
    <!-- You can display other profile information here -->
    <p>Email: <?php echo $profile['email']; ?></p>
    <p>Phone: <?php echo $profile['phone']; ?></p>
    <!-- Add more profile information as needed -->
    <a href="logout.php">Logout</a> <!-- Assuming you have a logout.php file to handle logout -->
</body>
</html>
