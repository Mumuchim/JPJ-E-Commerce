<?php
include "../db_conn.php"; // Adjust the path as needed

// Check if form data is set
if (isset($_POST['product_name']) && isset($_POST['quantity']) && isset($_POST['price'])) {
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // Validate product data
    if (empty($product_name) || empty($quantity) || empty($price)) {
        die("Invalid product data");
    }

    // Optionally, validate if the product exists in the database
    // $sql = "SELECT * FROM products WHERE id = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute([$product_id]);

    // if ($stmt->rowCount() == 0) {
    //     die("Invalid product data: Product not found");
    // }

    // Get the username of the logged-in user from the session
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

    // Add item to the cart in the database
    $sql = "INSERT INTO cart (product_name, quantity, price, username) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute([$product_name, $quantity, $price, $username])) {
        echo "Item added to cart successfully!";
    } else {
        echo "Error adding item to cart: " . $stmt->errorInfo()[2];
    }
} else {
    die("Invalid product data: Missing required fields");
}
?>
