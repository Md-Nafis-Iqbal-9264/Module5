<!-- role_management.php -->
<?php
session_start();

// Access control
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Role Management</title>
</head>
<body>
    <h2>Role Management</h2>
    <p>This page is accessible only by admins.</p>
    <!-- Add functionality to create, edit, and delete user roles -->
</body>
</html>
