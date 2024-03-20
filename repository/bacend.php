<?php
// Example: Simple username/password validation
$valid_username = 'admin';
$valid_password = 'password';

// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials match the valid credentials
if ($username === $valid_username && $password === $valid_password) {
  // If credentials are valid, redirect to a success page
  header('Location: success.php');
  exit;
} else {
  // If credentials are not valid, redirect back to the login page with an error message
  header('Location: login.html?error=invalid_credentials');
  exit;
}
?>
