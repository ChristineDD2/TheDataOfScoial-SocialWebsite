<?php
session_start();

// Simulated user validation - replace with actual validation logic
if (!isset($_SESSION['user_email'])) {
    header("Location: login.html"); // Redirect to the login page if the user is not authenticated
    exit();
}

$userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>Hello, <?php echo $userEmail; ?>! This is your dashboard.</p>
    <p>Here, you can manage your data, connections, and more.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
