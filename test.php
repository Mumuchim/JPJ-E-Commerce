<?php
session_start(); // Start the session
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JPJ</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - HEADER
  -->

  <header>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo.png" alt="Anon's logo" width="200" height="30">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

         

        <a href="cart.html" class="action-btn" style="display: inline-flex; align-items: center; text-decoration: none;">
    <ion-icon name="bag-handle-outline"></ion-icon>
    <span class="count">0</span>
</a>

 
          <div class="dropdown">
    <button class="header-action-btn" aria-label="user" style="display: flex; align-items: center; gap: 10px;">
        <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        <span>
            <?php 
               if (isset($_SESSION['username'])) {
                echo htmlspecialchars($_SESSION['username']);
            } else {
                echo "Guest";
            }
            
            ?>
        </span>
    </button>
    <div class="dropdown-content">
        <a href="profile.php">Account</a>
        <a href="cart.html">Cart</a>
        <a href="logout.php">Log out</a>
    </div>
</div>
        </div>

      </div>

    </div>


<!-- cart here  -->

<div class="container cart">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <input type="checkbox" class="cart-checkbox" data-price="29.99" /> <!-- Checkbox for selection -->
              <img src="./images/product-2.jpg" alt="" />
              <div>
                <p>Product Name</p>
                <span>Price: $29.99</span><br />
                <a href="#" class="remove">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" class="product-quantity" /></td>
          <td class="product-price">$29.99</td>
        </tr>        

        <tr>
          <td>
            <div class="cart-info">
              <input type="checkbox" class="cart-checkbox" data-price="29.99" /> <!-- Checkbox for selection -->
              <img src="./images/product-2.jpg" alt="" />
              <div>
                <p>Product Name</p>
                <span>Price: $29.99</span><br />
                <a href="#" class="remove">remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" class="product-quantity" /></td>
          <td class="product-price">$29.99</td>
        </tr>
        
        
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td><span class="subtotal">$200</span></td> <!-- This will be updated -->
          </tr>
          <tr>
            <td>Tax</td>
            <td><span class="tax">$50</span></td> <!-- This will be updated -->
          </tr>
          <tr>
            <td>Total</td>
            <td><span class="total-amount">0</span></td> <!-- This will be updated -->
          </tr>
        </table>
        <a href="#" class="checkout btn">Proceed To Checkout</a>
      </div>
      





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>