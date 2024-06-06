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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $profile['name']; ?>!</h1>
    <!-- You can display other welcome information here -->
    <p>This is your profile page. Here you can view and edit your profile information.</p>
    <!-- Add more welcome information or functionality as needed -->
    <a href="profile.php">View Profile</a> <!-- Link back to the user's profile -->
    <br>
    <a href="logout.php">Logout</a> <!-- Assuming you have a logout.php file to handle logout -->
</body>
</html>
