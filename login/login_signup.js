const sign_in_btn = document.querySelector("#btn-sign-in");
const sign_up_btn = document.querySelector("#btn-sign-up");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});



//login ajax
$(function () {
  $('.sign-in-form').submit(function (e) {
    e.preventDefault(); // Prevent default form submission

    var username = $('#login-username').val();
    var password = $('#login-password').val();

    // Send login details via AJAX
    $.ajax({
      type: 'POST',
      url: 'login.php', // Path to your PHP login script
      data: { username: username, password: password },
      success: function (response) {
        if (response.status === 'success') {
          // Success pop-up and redirection
          Swal.fire({
            title: 'Welcome!',
            text: response.message,
            icon: 'success',
            timer: 2000,
            showConfirmButton: false,
          }).then(() => {
            window.location.href = response.redirect; // Redirect to home.php
          });
        } else {
          // Error pop-up
          Swal.fire({
            title: 'Error',
            text: response.message,
            icon: 'error',
          });
        }
      },
      error: function () {
        // General error handling
        Swal.fire({
          title: 'Error',
          text: 'Unable to process the login request.',
          icon: 'error',
        });
      },
    });
  });
});



//signup ajax
$(function() {
  $('#register').click(function(e) {
    e.preventDefault(); // Prevent default form submission

    var username = $('#signup-username').val();
    var email = $('#signup-email').val();
    var password = $('#signup-password').val();

    // Check if all fields are filled
    if (username && email && password) {
      $.ajax({
        type: 'POST',
        url: 'signup.php', // Ensure this points to your server-side processing file
        data: {
          username: username,
          email: email,
          password: password
        },
        success: function(response) {
          console.log('Raw response:', response); // Log the raw response

          try {
            var result = JSON.parse(response);

            if (result.status === 'success') {
              Swal.fire({
                title: 'Successful',
                text: 'You have registered successfully!',
                icon: 'success'
              }).then((result) => {
                if (result.isConfirmed) {
                  // Clear the form fields
                  $('#signup-username').val('');
                  $('#signup-email').val('');
                  $('#signup-password').val('');
                  $('#btn-sign-in').click();
                }
              });
            } else {
              Swal.fire({
                title: 'Error',
                text: result.message,
                icon: 'error'
              });
            }
          } catch (e) {
            console.error('Invalid JSON response:', e);
            Swal.fire({
              title: 'Error',
              text: 'Invalid response from server.',
              icon: 'error'
            });
          }
        },
        error: function() {
          Swal.fire({
            title: 'Error',
            text: 'There were errors while saving the data.',
            icon: 'error'
          });
        }
      });
    } else {
      Swal.fire({
        title: 'Validation Error',
        text: 'Please fill out all fields correctly.',
        icon: 'warning'
      });
    }
  });
});
