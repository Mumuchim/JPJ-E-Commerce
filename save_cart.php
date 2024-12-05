<?php
// Database connection settings
$host = 'localhost';
$db = 'jpjj';
$user = 'root';
$pass = '';

try {
    // Create a new database connection
    $conn = new mysqli($host, $user, $pass, $db);

    // Check the connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize and validate input data
        $product_name = trim($_POST['product_name']);
        $product_price = trim($_POST['product_price']);
        $quantity = trim($_POST['quantity']);
        $total_price = trim($_POST['total_price']);

        if (empty($product_name) || empty($product_price) || empty($quantity) || empty($total_price)) {
            throw new Exception("All fields are required.");
        }

        // Use a prepared statement to insert data
        $stmt = $conn->prepare("INSERT INTO cart (product_name, product_price, quantity, total_price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $product_name, $product_price, $quantity, $total_price);

        // Execute the query
        if ($stmt->execute()) {
            echo "Cart item saved successfully!";
        } else {
            throw new Exception("Error saving the cart item: " . $stmt->error);
        }

        // Close the prepared statement
        $stmt->close();
    }
} catch (Exception $e) {
    // Display user-friendly error
    echo "An error occurred: " . $e->getMessage();

    // Log detailed error for debugging (can be written to a log file)
    error_log($e->getMessage());
} finally {
    // Close the connection
    $conn->close();
}
?>
