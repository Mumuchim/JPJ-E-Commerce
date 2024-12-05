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
  const cartIcons = document.querySelectorAll('.bx-cart');
  const addCartButtons = document.querySelectorAll('.add-to-cart');
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
      e.preventDefault();
      const productName = button.dataset.product;
      const productPrice = parseFloat(button.dataset.price);

      addToCart(productName, productPrice); // Add the item to the cart
      showNotification(); // Show the notification
    });
  });
});

// Function to add the item to the cart
function addToCart(productName, productPrice) {
  const cartTable = document.querySelector('.cart table');

  // Create a new row for the product in the cart
  const newRow = document.createElement('tr');
  
  newRow.innerHTML = `
    <td>
      <div class="cart-info">
        <input type="checkbox" class="cart-checkbox" data-price="${productPrice}" /> <!-- No "checked" attribute -->
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
  
  cartTable.appendChild(newRow);

  // After adding the item, set up quantity change event
  newRow.querySelector('.product-quantity').addEventListener('input', (e) => {
    updateProductPrice(e.target); // Update price when quantity changes
    updateTotal(); // Recalculate total
  });

  // After adding the item, set up checkbox change event
  newRow.querySelector('.cart-checkbox').addEventListener('change', updateTotal);

  // Add event listener for the "remove" button
  const removeButton = newRow.querySelector('.remove');
  removeButton.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default action (navigation)
    newRow.remove(); // Remove the row from the cart
    updateTotal(); // Recalculate the total after removal
  });

  // Recalculate the total after adding the item
  updateTotal();
}

// Function to update the subtotal, tax, and total for checked items
function updateTotal() {
  let subtotal = 0;
  const checkboxes = document.querySelectorAll('.cart-checkbox');
  const taxRate = 0.10; // Assuming 10% tax rate

  checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      const row = checkbox.closest('tr');
      const productPrice = parseFloat(row.querySelector('.product-price').textContent.replace('$', ''));
      subtotal += productPrice; // Add the price to the subtotal if checked
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

// Function to update the product price based on the quantity for each item
function updateProductPrice(input) {
  const row = input.closest('tr');
  const pricePerUnit = parseFloat(row.querySelector('.cart-checkbox').getAttribute('data-price'));
  const quantity = parseInt(input.value);
  const updatedPrice = pricePerUnit * quantity;
  
  const productPriceElement = row.querySelector('.product-price');
  productPriceElement.textContent = `$${updatedPrice.toFixed(2)}`;
}

// Event listener for quantity changes to update price even if checkbox is not checked
document.querySelectorAll('input[type="number"]').forEach(input => {
  input.addEventListener('input', function() {
    if (parseInt(input.value) < 1) {
      input.value = 1;
    }
    updateProductPrice(input); 
    updateTotal();
  });
});

// Event listeners for checkboxes to update the total when an item is selected or deselected
document.querySelectorAll('.cart-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', updateTotal); 
});

// Initial update of the total price
updateTotal();

/////////////////////////////////////////////////////////////////////////////////////////////

addCartButtons.forEach(button => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    const productName = button.dataset.product;  // Get product name
    const productPrice = parseFloat(button.dataset.price);  // Get product price

    addToCart(productName, productPrice);  // Add the item to the cart
    showNotification();  // Show the notification

    // Send data to the PHP backend
    saveToDatabase(productName, productPrice);
  });
});

// Function to send product data to the server
function saveToDatabase(productName, productPrice) {
  fetch('save_to_cart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ productName, productPrice })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      console.log('Product saved successfully!');
    } else {
      console.log('Failed to save product.');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
