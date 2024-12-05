<?php
// signup.php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Example validation and processing
if ($username && $email && $password) {
    // Process the data here
    $result = array('status' => 'success', 'message' => 'You have registered successfully!');
} else {
    $result = array('status' => 'error', 'message' => 'Please fill out all fields correctly.');
}

// Ensure the response is in JSON format
header('Content-Type: application/json');
echo json_encode($result);
?>