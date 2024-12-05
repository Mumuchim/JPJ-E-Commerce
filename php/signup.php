<?php 

if (isset($_POST['fname']) && 
    isset($_POST['lname']) && 
    isset($_POST['username']) && 
    isset($_POST['email']) &&  
    isset($_POST['pass'])) { // Include username check

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $data = "fname=" . $fname . "&lname=" . $lname . "&username=" . $username . "&email=" . $email;
    
    if (empty($fname)) {
        $em = "First name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($lname)) {
        $em = "Last name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($username)) {
        $em = "Username is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($email)) {
        $em = "Email is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {
        // Hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        // Insert into Database
        $sql = "INSERT INTO users (fname, lname, username, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $lname, $username, $email, $pass]);

        header("Location: ../register.php?success=Your account has been created successfully");
        exit;
    }

} else {
    header("Location: ../register.php?error=error");
    exit;
}
