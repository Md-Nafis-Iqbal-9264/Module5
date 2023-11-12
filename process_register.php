<!-- process_register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform validation and save user details (database storage is recommended)

    // Redirect to login page after successful registration
    header("Location: login.php");
    exit();
}
?>
