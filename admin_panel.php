<?php
session_start();

// Set your admin username and password
$adminUsername = "admin";
$adminPassword = "password123";  // Use a more secure password in production

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify credentials
    if ($username == $adminUsername && $password == $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid credentials.');</script>";
    }
}

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.html");
    exit();
}
?>