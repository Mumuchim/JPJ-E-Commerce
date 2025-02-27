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
    - MODAL
  -->

  <!-- <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Anon</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>
 -->




  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





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

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Bags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Desktop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tablet</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Shoes</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Jacket</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Clothes</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cosmetics</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Trending</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Summer Dress</a>   
                </li>

                <li class="panel-list-item">
                  <a href="#">Running Shoes</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tote Bag</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Office Attire</a>
                </li>
                
              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Bags</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Clothes</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Shoes</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bracelets</a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/Group 9.png" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Fashion that matches Your Style</p>

              <h2 class="banner-title">Women's latest fashion sale</h2>

              <p class="banner-text">
                starting at ₱ <b>200</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

           <div class="slider-item">

            <img src="./assets/images/Banner/sanrio set banner.png" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Modern sunglasses</h2>

              <p class="banner-text">
                starting at ₱ <b>15</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/Banner/c1.png" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New fashion summer sale</h2>

              <p class="banner-text">
                starting at ₱ <b>29</b>.99
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div> 

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/dress.svg" alt="clothes" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Clothes</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

         
          
          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/bag.svg" alt="bag" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Bag</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/shoes.svg" alt="shoes" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Shoes</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/jacket.svg" alt="All" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">All</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div> 


        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Clothes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shirt</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">shorts & jeans</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">jacket</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">dress & frock</p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Shoes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sports</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Safety Shoes</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bags</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shopping Bag</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gym Backpack</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Purse</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Wallet</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

<h3 class="showcase-heading">best sellers</h3>

<div class="showcase-wrapper">

  <div class="showcase-container">

    <div class="showcase">

      <a href="#" class="showcase-img-box">
        <img src="./assets/images/Shoes/S1.jpg" alt="coffee-brown chunky platform shoes" width="75" height="75"
          class="showcase-img">
      </a>

      <div class="showcase-content">

        <a href="#">
          <h4 class="showcase-title">coffee chunky shoes</h4>
        </a>

        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>

        <div class="price-box">
          <del>₱5.00</del>
          <p class="price">₱4.00</p>
        </div>

      </div>

    </div>

    <div class="showcase">

      <a href="#" class="showcase-img-box">
        <img src="./assets/images/cLOTHES/clothes 4.5.jpg" alt="Coffee Shade Skirt" class="showcase-img"
          width="75" height="75">
      </a>

      <div class="showcase-content">

        <a href="#">
          <h4 class="showcase-title">Coffee Shade Skirt</h4>
        </a>
        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-half-outline"></ion-icon>
        </div>

        <div class="price-box">
          <del>₱17.00</del>
          <p class="price">₱7.00</p>
        </div>

      </div>

    </div>

    <div class="showcase">

      <a href="#" class="showcase-img-box">
        <img src="./assets/images/cLOTHES/clothes 4.6.jpg" alt="Beige Oversized Jacket" class="showcase-img" width="75"
          height="75">
      </a>

      <div class="showcase-content">

        <a href="#">
          <h4 class="showcase-title">Beige Oversized Jacket</h4>
        </a>
        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-half-outline"></ion-icon>
        </div>

        <div class="price-box">
          <del>₱5.00</del>
          <p class="price">₱3.00</p>
        </div>

      </div>

    </div>

    <div class="showcase">

      <a href="#" class="showcase-img-box">
        <img src="./assets/images/BAG/B28.jpg" alt="Beige Bucket Bag" class="showcase-img" width="75"
          height="75">
      </a>

      <div class="showcase-content">

        <a href="#">
          <h4 class="showcase-title">Beige Bucket Bag</h4>
        </a>
        <div class="showcase-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>

        <div class="price-box">
          <del>₱15.00</del>
          <p class="price">₱12.00</p>
        </div>

      </div>

    </div>

  </div>

</div>

</div>

</div>


        <div class="product-box">

<!--
  - PRODUCT MINIMAL
-->

<div class="product-minimal">

  <div class="product-showcase">

    <h2 class="title">New Arrivals</h2>

    <div class="showcase-wrapper has-scrollbar">

      <div class="showcase-container">

        <div class="showcase">

          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/C1.jpg" alt="Striped Knit Cardigan" width="70" class="showcase-img">
          </a>

          <div class="showcase-content">

            <a href="#">
              <h4 class="showcase-title">Striped Knit Cardigan</h4>
            </a>

            <a href="#" class="showcase-category">Clothes</a>

            <div class="price-box">
              <p class="price">₱350.00</p>
              <del>₱550.00</del>
            </div>

          </div>

        </div>

        <div class="showcase">
        
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/cl1.jpg" alt="Sleek Front-Tie Bustier" class="showcase-img" width="70">
          </a>
        
          <div class="showcase-content">
        
            <a href="#">
              <h4 class="showcase-title">Sleek Front-Tie Bustier</h4>
            </a>
        
            <a href="#" class="showcase-category">Clothes</a>
        
            <div class="price-box">
              <p class="price">₱300.00</p>
              <del>₱500.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/C8.png" alt="Blue Breeze Tee" class="showcase-img"
              width="70">
          </a>
        
          <div class="showcase-content">
        
            <a href="#">
              <h4 class="showcase-title">Blue Breeze Tee</h4>
            </a>
        
            <a href="#" class="showcase-category">Clothes</a>
        
            <div class="price-box">
              <p class="price">₱350.00</p>
              <del>₱550.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/C5.png" alt="Winter Sky Jacket" class="showcase-img"
              width="70">
          </a>
        
          <div class="showcase-content">
        
            <a href="#">
              <h4 class="showcase-title">Winter Sky Jacket</h4>
            </a>
        
            <a href="#" class="showcase-category">Clothes</a>
        
            <div class="price-box">
              <p class="price">₱875.00</p>
              <del>₱1000.00</del>
            </div>
        
          </div>
        
        </div>

      </div>

      <div class="showcase-container">
      
        <div class="showcase">
      
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/d3.png" alt="Desert Charm Dress" class="showcase-img"
              width="70">
          </a>
      
          <div class="showcase-content">
      
            <a href="#">
              <h4 class="showcase-title">Desert Charm Dress</h4>
            </a>
      
            <a href="#" class="showcase-category">Dress</a>
      
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
      
          </div>
      
        </div>
      
        <div class="showcase">
      
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/d1.png" alt="Midnight Elegance Dress" class="showcase-img"
              width="70">
          </a>
      
          <div class="showcase-content">
      
            <a href="#">
              <h4 class="showcase-title">Midnight Elegance Dress</h4>
            </a>
      
            <a href="#" class="showcase-category">Dress</a>
      
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
      
          </div>
      
        </div>
      
        <div class="showcase">
      
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/d2.png" alt="Garden Bloom Maxi" class="showcase-img"
              width="70">
          </a>
      
          <div class="showcase-content">
      
            <a href="#">
              <h4 class="showcase-title">Garden Bloom Maxi</h4>
            </a>
      
            <a href="#" class="showcase-category">Dress</a>
      
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
      
          </div>
      
        </div>
      
        <div class="showcase">
      
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/cLOTHES/d4.png" alt="Summer Petals Dress" class="showcase-img"
              width="70">
          </a>
      
          <div class="showcase-content">
      
            <a href="#">
              <h4 class="showcase-title">Summer Petals Dress</h4>
            </a>
      
            <a href="#" class="showcase-category">Dress</a>
      
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
      
          </div>
      
        </div>
      
      </div>

    </div>

  </div>

  <div class="product-showcase">
  
    <h2 class="title">Trending</h2>
  
    <div class="showcase-wrapper  has-scrollbar">
  
      <div class="showcase-container">
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S23.png" alt="Scarlet Pearl Sandal's" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Scarlet Pearl Sandal's</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱1500.00</p>
              <del>₱3000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S27.png" alt="Lilac Walk Sandal's" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Lilac Walk Sandal's</h4>
            </a>
  
            <a href="#" class="showcase-category">Sports</a>
  
            <div class="price-box">
              <p class="price">₱1200.00</p>
              <del>₱2500.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S24.png" alt="Sage Soles Sandal's" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Sage Soles Sandal's</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱1500.00</p>
              <del>₱3000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S28.png" alt="Sweet Candy Pink Sandal's" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Sweet Candy Pink Sandal's</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱1200.00</p>
              <del>₱3500.00</del>
            </div>
  
          </div>
  
        </div>
  
      </div>
  
      <div class="showcase-container">
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S2.png" alt="Pink Strap Shoes" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Pink Strap Shoes</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱650.00</p>
              <del>₱1000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S7.png" alt="Beige Heels" class="showcase-img" width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Beige Heels</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱500.00</p>
              <del>₱1000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S29.png" alt="Brown Formal Shoes" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Brown Formal Shoes</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/Shoes/S30.png" alt="Light Blue Flats" class="showcase-img" width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Light Blue Flats</h4>
            </a>
  
            <a href="#" class="showcase-category">Shoes</a>
  
            <div class="price-box">
              <p class="price">₱850.00</p>
              <del>₱1000.00</del>
            </div>
  
          </div>
  
        </div>
  
      </div>
  
    </div>
  
  </div>

  <div class="product-showcase">
  
    <h2 class="title">Top Rated</h2>
  
    <div class="showcase-wrapper  has-scrollbar">
  
      <div class="showcase-container">
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B19.png" alt="Pink Handbag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Pink Handbag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱850.00</p>
              <del>₱1000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B17.png" alt="Pearl White Handbag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Pearl White Handbag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱750.00</p>
              <del>₱1000.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B20.png" alt="Coffee Shade Handbag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Coffee Shade Handbag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱1000.00</p>
              <del>₱1500.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B30.png" alt="Green Leather Bag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Green Leather Bag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱900.00</p>
              <del>₱1200.00</del>
            </div>
  
          </div>
  
        </div>
  
      </div>
  
      <div class="showcase-container">
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B1.png" alt="Beige Mini Bag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Beige Mini Bag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱1500.00</p>
              <del>₱1800.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B2.png" alt="Two-Tone Crossbody" class="showcase-img" width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Two-Tone Crossbody</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱500.00</p>
              <del>₱800.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B12.png" alt="Black Handbag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Black Handbag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱650.00</p>
              <del>₱800.00</del>
            </div>
  
          </div>
  
        </div>
  
        <div class="showcase">
  
          <a href="#" class="showcase-img-box">
            <img src="./assets/images/BAG/B6.png" alt="Green Shoulder Bag" class="showcase-img"
              width="70">
          </a>
  
          <div class="showcase-content">
  
            <a href="#">
              <h4 class="showcase-title">Green Shoulder Bag</h4>
            </a>
  
            <a href="#" class="showcase-category">BAG</a>
  
            <div class="price-box">
              <p class="price">₱300.00</p>
              <del>₱450.00</del>
            </div>
  
          </div>
  
        </div>
  
      </div>
  
    </div>
  
  </div>

</div>



      <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/cLOTHES/Cl02.png" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Cherry Top, Long Denim Skirt & Night Black Bag</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">₱4000.00</p>

                      <del>₱4500.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/cLOTHES/Cl01.png" alt="Niki Trendy Outfit Collection" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Niki Trendy Outfit Collection</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="price-box">
                      <p class="price">₱4500.00</p>
                      <del>₱5000.00</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>



        <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/cLOTHES/B01.png" alt="Office Blazer Outfit" width="300" class="product-img default">
                  <img src="./assets/images/cLOTHES/B02.png" alt="Office Blazer Outfit" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Office Blazer Outfit"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1200.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">CLOTHES</a>

                  <a href="#">
                    <h3 class="showcase-title">Office Blazer Outfit</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱1200.00</p>
                    <del>₱1500.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/cLOTHES/B03.png" alt="White Flower Top" class="product-img default"
                    width="300">
                  <img src="./assets/images/cLOTHES/B04.png" alt="White Flower Top" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="White Flower Top"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="250.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">CLOTHES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">White Flower Top</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱250.00</p>
                    <del>₱500.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/cLOTHES/b07.png" alt="Summer Floral Dress" class="product-img default"
                    width="200">
                  <img src="./assets/images/cLOTHES/b08.png" alt="Summer Floral Dress" class="product-img hover"
                    width="200">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Summer Floral Dress"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="200.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">CLOTHES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Summer Floral Dress</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱200.00</p>
                    <del>₱300.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/cLOTHES/b12.png" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/cLOTHES/b11.png" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">new</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Black Floral Wrap Midi Skirt"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="25.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">skirt</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱25.00</p>
                    <del>₱35.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/Shoes/SS1.png" alt="Blue Ocean Sandal's" class="product-img default"
                    width="300">
                  <img src="./assets/images/Shoes/SS3.png" alt="Blue Ocean Sandal's" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Blue Ocean Sandal's"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1000.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">SHOES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Blue Ocean Sandal's</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1000.00</p>
                    <del>₱1200.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/Shoes/SS7.png" alt="Formal Dark Brown Shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/Shoes/SS5.png" alt="Formal Dark Brown Shoes" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Formal Dark Brown Shoes"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1000.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">SHOES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Formal Dark Brown Shoes</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1000.00</p>
                    <del>₱1500.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/Shoes/SS11.png" alt="Vagabond Brook Boots" class="product-img default"
                    width="300">
                  <img src="./assets/images/Shoes/SS12.png" alt="Vagabond Brook Boots" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Vagabond Brook Boots"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1500.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">SHOES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Vagabond Brook Boots</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1500.00</p>
                    <del>₱2000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/Shoes/SS13.png" alt="Slippers Beige Sandal's" class="product-img default"
                    width="300">
                  <img src="./assets/images/Shoes/SS14.png" alt="Slippers Beige Sandal's" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Slippers Beige Sandal's"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="500.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">SHOES</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Slippers Beige Sandal's</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱500.00</p>
                    <del>₱1000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/BAG/BB2.png" alt="Elegant Beige Shoulder Bag " class="product-img default"
                    width="300">
                  <img src="./assets/images/BAG/BB1.png" alt="Elegant Beige Shoulder Bag " class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Elegant Beige Shoulder Bag"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1000.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">BAG</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Elegant Beige Shoulder Bag </a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1000.00</p>
                    <del>₱1200.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/BAG/BB5.png" alt="Dark Brown Handbag" class="product-img default"
                    width="300">
                  <img src="./assets/images/BAG/BB6.png" alt="Dark Brown Handbag" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Dark Brown Handbag"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="800.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">BAG</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Dark Brown Handbag</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱800.00</p>
                    <del>₱1000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/BAG/BB8.jpg" alt="Mini Kelly Bag" class="product-img default"
                    width="300">
                  <img src="./assets/images/BAG/BB7.png" alt="Mini Kelly Bag" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Mini Kelly Bag"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1000.00"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">BAG</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Mini Kelly Bag</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1000.00</p>
                    <del>₱1500.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/BAG/BB9.png" alt="Creamy White Shoulder Bag"
                    class="product-img default" width="300">
                  <img src="./assets/images/BAG/BB10.png" alt="Creamy White Shoulder Bag"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <!-- <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button> -->

                    <form id="addToCartForm" action="/php/add_to_cart.php" method="POST">
    <input type="hidden" name="product_name" value="Creamy White Shoulder Bag"> <!-- Ensure the value is correct -->
    <input type="hidden" name="quantity" value="1"> <!-- Ensure the value is correct -->
    <input type="hidden" name="price" value="1000"> <!-- Ensure the value is correct -->
    <button class="btn-action" id="bagAddButton" type="submit">
        <ion-icon name="bag-add-outline"></ion-icon>
    </button>
</form>




                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">BAG</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Creamy White Shoulder Bag</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱1000.00</p>
                    <del>₱1200.00</del>
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>




    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">members</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Carag, Pauline Kaye B. <br> Cereneo, Jerome Isaac <br> Doldol, Jhewen Shene B. <br> Trocio, Joan</p>
            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ ₱10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

           <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over ₱100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">PH Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over ₱100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div> 

  </main>

  <!--
    - FOOTER
  -->

  <footer>
    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Bocaue, Bulacan
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="#" class="footer-nav-link">(+69) 123 456 789</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="#" class="footer-nav-link">jpjFashion@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">JPJ</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






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