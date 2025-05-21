<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Dummy credentials
    $valid_user = 'raj';
    $valid_pass = '5678';

    if ($username === $valid_user && $password === $valid_pass) {
        // Save user in session
        $_SESSION['username'] = $username;

        // 🚨 Redirect instead of echo
        header("Location: welcome.php");
        exit();
    } else {
        // 🚨 Redirect back to login with error flag
        header("Location: login.html?error=1");
        exit();
    }
}
?>
