<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    include "db_conn.php";
    include 'php/User.php';

    $user = getUserById($_SESSION['id'], $conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php if ($user) { ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <form class="shadow w-450 p-3" 
              action="php/edit.php" 
              method="post"
              enctype="multipart/form-data">

            <h4 class="display-4 fs-1">Edit Profile</h4><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
            
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" 
                       class="form-control"
                       name="fname"
                       value="<?php echo $user['fname'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" 
                       class="form-control"
                       name="lname"
                       value="<?php echo $user['lname'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" 
                       class="form-control"
                       name="username"
                       value="<?php echo $user['username'] ?>">
            </div>


            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                       class="form-control"
                       name="email"
                       value="<?php echo $user['email'] ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" 
                           class="form-control"
                           name="password"
                           id="passwordInput"
                           value="<?php echo $user['password'] ?>">
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">Show</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="homepage.php" class="link-secondary">Home</a>
        </form>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("passwordInput");
            var toggleButton = event.target;
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerText = "Hide";
            } else {
                passwordInput.type = "password";
                toggleButton.innerText = "Show";
            }
        }
    </script>

    
    <?php } else { 
        header("Location: home.php");
        exit;
    } ?>
</body>
</html>

<?php } else {
    header("Location: login.php");
    exit;
} ?>
