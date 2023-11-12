<!-- process_login.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform authentication (database lookup is recommended)

    // For simplicity, let's assume a user with admin role
    $role = 'admin';

    // Set session variables
    $_SESSION["email"] = $email;
    $_SESSION["role"] = $role;

    // Redirect based on the role
    if ($role === 'admin') {
        header("Location: role_management.php");
    } else {
        header("Location: user_dashboard.php");
    }
    exit();
}
?>
