'use strict';

// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');
            const productName = this.getAttribute('data-product-name');
            const productPrice = this.getAttribute('data-product-price');

            // Send data to the server
            fetch('php/add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    product_id: productId,
                    product_name: productName,
                    product_price: productPrice,
                }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update the cart count
                        const countElement = document.querySelector('.count');
                        countElement.textContent = data.cart_count;
                        alert('Item added to cart!');
                    } else {
                        alert('Failed to add item to cart.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while adding to the cart.');
                });
        });
    });

          $(document).ready(function() {
            $('#addToCartForm').submit(function(e) {
              e.preventDefault(); // Prevent default form submission
    
              var formData = $(this).serialize(); // Serialize form data
    
              $.ajax({
                type: 'POST',
                url: '/php/add_to_cart.php', // Path to your PHP script
                data: formData,
                success: function(response) {
                  try {
                    var result = JSON.parse(response);
    
                    if (result.status === 'success') {
                      Swal.fire({
                        title: 'Added to Cart!',
                        text: result.message,
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false,
                      });
                    } else {
                      Swal.fire({
                        title: 'Error',
                        text: result.message,
                        icon: 'error',
                      });
                    }
                  } catch (e) {
                    console.error('Invalid JSON response:', e);
                    Swal.fire({
                      title: 'Error',
                      text: 'Invalid response from server.',
                      icon: 'error',
                    });
                  }
                },
                error: function() {
                  Swal.fire({
                    title: 'Error',
                    text: 'Unable to process the request.',
                    icon: 'error',
                  });
                },
              });
            });
          });