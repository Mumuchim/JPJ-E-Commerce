<?php
// Set the response header to return JSON
header('Content-Type: application/json');

// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize the response array
$response = array();

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the username, email, and password from the POST request
    $username = trim($_POST['username']); // Trim input to remove extra spaces
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate that all fields are provided
    if ($username && $email && $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        try {
            // Connect to the database
            $conn = new PDO("mysql:host=localhost;dbname=jpj;charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the username already exists
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $response['status'] = 'error';
                $response['message'] = 'Username already exists!';
            } else {
                // Prepare the SQL statement to insert the new user
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
                $stmt->execute();

                // Respond with 'success' if registration is successful
                $response['status'] = 'success';
                $response['message'] = 'You have registered successfully!';
            }
        } catch (PDOException $e) {
            // Handle database connection errors
            $response['status'] = 'error';
            $response['message'] = 'Database error: ' . $e->getMessage();
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required!';
    }
} else {
    // If the request method is not POST, return an error
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

// Encode the response as JSON and output it
echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>
