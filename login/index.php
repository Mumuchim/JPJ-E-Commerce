<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login & Sign up</title>
    <!-- Include jQuery and SweetAlert2 libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="login.php" method="post" class="sign-in-form">
  <h2 class="title">Login</h2>
  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" name="username" id="login-username" placeholder="Username" />
  </div>
  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="login-password" placeholder="Password" />
  </div>
  <input type="submit" value="Login" class="btn solid" />

</form>


          <form action="signup.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="signup-username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="signup-email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="signup-password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" id="register" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Just Create your account. And Level up your style with our JPJ Fashion Collections.
            </p>
            <button class="btn transparent" id="btn-sign-up">
              Sign up
            </button>
          </div>
          <img src="img/icon.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Login now! to enjoy discounts and special gifts just for you!
            </p>
            <button class="btn transparent" id="btn-sign-in">
              Login
            </button>
          </div>
          <img src="img/icon2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login_signup.js"></script>
  </body>
</html>
