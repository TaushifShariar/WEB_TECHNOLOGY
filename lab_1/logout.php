<?php
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();


// Redirect to the login page
header("Location: lab_1.html"); // Replace with your login page
exit();
?>
