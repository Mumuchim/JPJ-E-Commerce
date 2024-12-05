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
    // Get the username and password from the POST request
    $username = trim($_POST['username']); // Trim input to remove extra spaces
    $password = trim($_POST['password']);

    try {
        // Connect to the database
        $conn = new PDO("mysql:host=localhost;dbname=jpj;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to fetch the user
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch the user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists and verify the password
        if ($user && password_verify($password, $user['password'])) {
            $response['status'] = 'success';
            $response['message'] = 'Login successful!';
            $response['redirect'] = '/homepage.php'; // Add the redirect URL
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Invalid username or password!';
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        $response['status'] = 'error';
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
} else {
    // If the request method is not POST, return an error
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

// Encode the response as JSON and output it
echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>
