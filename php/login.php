<?php 
session_start();

if (isset($_POST['username']) && isset($_POST['pass'])) {

    include "../db_conn.php";

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $data = "username=" . $username;

    if (empty($username)) {
        $em = "Username is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();

            $db_username = $user['username'];
            $password = $user['password'];
            $fname = $user['fname'];
            $lname = $user['lname'];
            $id = $user['id'];
            $pp = $user['pp'];

            if ($db_username === $username) {
                if (password_verify($pass, $password)) {
                    // Store user data in session
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['pp'] = $pp;
                    $_SESSION['username'] = $db_username; // Add this line

                    // Redirect to the main page
                    header("Location: ../homepage.php");
                    exit;
                } else {
                    $em = "Incorrect username or password";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }
            } else {
                $em = "Incorrect username or password";
                header("Location: ../login.php?error=$em&$data");
                exit;
            }
        } else {
            $em = "Incorrect username or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }
    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
