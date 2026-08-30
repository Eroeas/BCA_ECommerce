<?php
// Start the session to access existing session variables
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

// Destroy the session completely
session_destroy();

// Start a fresh session to send a logout message back to login.php
session_start();
$_SESSION['success'] = "Logged out successfully";

// Redirect to login page
header("Location: login.php");
exit;
?>