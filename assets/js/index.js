const hamburer = document.querySelector(".hamburger");
const navList = document.querySelector(".nav-list");

if (hamburer) {
  hamburer.addEventListener("click", () => {
    navList.classList.toggle("open");
  });
}

// Popup
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup-close");

if (popup) {
  closePopup.addEventListener("click", () => {
    popup.classList.add("hide-popup");
  });

  window.addEventListener("load", () => {
    setTimeout(() => {
      popup.classList.remove("hide-popup");
    }, 1000);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const cartIcons = document.querySelectorAll('.bx-cart'); // Select all cart icons
  const addCartButtons = document.querySelectorAll('.addCart'); // Select all "Add To Cart" buttons
  const notification = document.getElementById('notification');

  // Function to show the notification
  const showNotification = () => {
    notification.classList.add('show');
    setTimeout(() => {
      notification.classList.remove('show');
    }, 2500);
  };

  // Attach event listeners to cart icons
  cartIcons.forEach(cartIcon => {
    cartIcon.addEventListener('click', showNotification);
  });

  // Attach event listeners to "Add To Cart" buttons
  addCartButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent default navigation
      showNotification();
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const sizeButtons = document.querySelectorAll(".size-btn");

  sizeButtons.forEach(button => {
    button.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent form submission or any default behavior
      sizeButtons.forEach(btn => btn.classList.remove("selected"));
      button.classList.add("selected");
    });
  });
});

// Function to update the total price, subtotal, and tax
function updateTotal() {
  let subtotal = 0;
  const checkboxes = document.querySelectorAll('.cart-checkbox'); // Select all checkboxes
  const quantities = document.querySelectorAll('input[type="number"]'); // Select quantity inputs
  const taxRate = 0.10; // Assuming 10% tax rate

  checkboxes.forEach((checkbox, index) => {
    if (checkbox.checked) {
      const price = parseFloat(checkbox.getAttribute('data-price')); // Get the price of the product
      const quantity = parseInt(quantities[index].value); // Get the quantity of the product
      subtotal += price * quantity; // Add the price multiplied by quantity to the subtotal
    }
  });

  // Calculate tax (10% of subtotal)
  const tax = subtotal * taxRate;

  // Calculate total (subtotal + tax)
  const total = subtotal + tax;

  // Update the values in the UI
  document.querySelector('.subtotal').textContent = '$' + subtotal.toFixed(2);
  document.querySelector('.tax').textContent = '$' + tax.toFixed(2);
  document.querySelector('.total-amount').textContent = '$' + total.toFixed(2);
}

// Event listeners for checkboxes and quantity changes
document.querySelectorAll('.cart-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', updateTotal); // When checkbox changes
});

document.querySelectorAll('input[type="number"]').forEach(input => {
  input.addEventListener('input', function() {
    if (parseInt(input.value) < 1) {
      input.value = 1;
    }
    updateTotal(); // Update total after quantity change
  });
});

// Initial update of the total price
updateTotal();


// Function to prevent quantity from being set to 0 or negative
document.querySelectorAll('input[type="number"]').forEach(input => {
  input.addEventListener('input', function() {
    // If the value is less than 1, reset it to 1
    if (parseInt(input.value) < 1) {
      input.value = 1;
    }
    updateTotal(); // Update total after validation
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Get all 'Add to Cart' buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');

  // Cart container where items will be listed
  const cartTable = document.querySelector('.cart table');

  // Update the total price elements
  const subtotalElement = document.querySelector('.subtotal');
  const taxElement = document.querySelector('.tax');
  const totalElement = document.querySelector('.total-amount');

  // Event listener for each add to cart button
  addToCartButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default navigation

      const productName = button.getAttribute('data-product');
      const productPrice = parseFloat(button.getAttribute('data-price'));

      // Create a new row for the cart item
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>
          <div class="cart-info">
            <input type="checkbox" class="cart-checkbox" data-price="${productPrice}" /> <!-- Checkbox for selection -->
            <img src="./images/product-2.jpg" alt="" />
            <div>
              <p>${productName}</p>
              <span>Price: $${productPrice.toFixed(2)}</span><br />
              <a href="#" class="remove">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1" class="product-quantity" /></td>
        <td class="product-price">$${productPrice.toFixed(2)}</td>
      `;
      
      // Add the row to the cart table
      cartTable.appendChild(row);

      // Attach event listener to the new checkbox for total calculation
      const checkbox = row.querySelector('.cart-checkbox');
      checkbox.addEventListener('change', updateTotal);

      // Attach event listener to the new quantity input for total calculation
      const quantityInput = row.querySelector('.product-quantity');
      quantityInput.addEventListener('input', function() {
        if (parseInt(quantityInput.value) < 1) {
          quantityInput.value = 1;
        }
        updateTotal(); // Update total after quantity change
      });

      // Optional: Handle the "remove" link for cart items
      const removeLink = row.querySelector('.remove');
      removeLink.addEventListener('click', function() {
        row.remove();
        updateTotal(); // Recalculate totals after removing an item
      });

      // Update cart totals
      updateTotal();
    });
  });
// Function to update the total price, subtotal, and tax
function updateTotal() {
  let subtotal = 0;
  const checkboxes = document.querySelectorAll('.cart-checkbox'); // Select all checkboxes
  const quantities = document.querySelectorAll('input[type="number"]'); // Select quantity inputs
  const taxRate = 0.10; // Assuming 10% tax rate

  checkboxes.forEach((checkbox, index) => {
    if (checkbox.checked) {
      const price = parseFloat(checkbox.getAttribute('data-price')); // Get the price of the product
      const quantity = parseInt(quantities[index].value); // Get the quantity of the product
      const productPriceElement = checkbox.closest('tr').querySelector('.product-price'); // Select the product price element

      // Update the product price in the cart row (price * quantity)
      const updatedPrice = price * quantity;
      productPriceElement.textContent = `$${updatedPrice.toFixed(2)}`;

      subtotal += updatedPrice; // Add the updated price to the subtotal
    }
  });

  // Calculate tax (10% of subtotal)
  const tax = subtotal * taxRate;

  // Calculate total (subtotal + tax)
  const total = subtotal + tax;

  // Update the values in the UI
  document.querySelector('.subtotal').textContent = '$' + subtotal.toFixed(2);
  document.querySelector('.tax').textContent = '$' + tax.toFixed(2);
  document.querySelector('.total-amount').textContent = '$' + total.toFixed(2);
}

// Event listeners for checkboxes and quantity changes
document.querySelectorAll('.cart-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', updateTotal); // When checkbox changes
});

document.querySelectorAll('input[type="number"]').forEach(input => {
  input.addEventListener('input', function() {
    if (parseInt(input.value) < 1) {
      input.value = 1;
    }
    updateTotal(); // Update total after quantity change
  });
});

// Initial update of the total price
updateTotal();

})