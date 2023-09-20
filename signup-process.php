<?php
require_once "includes/header.php"; // Include the header from the includes folder

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array(); // Initialize an array to store error messages

    // Retrieve and validate user input
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $pnum = $_POST["pnum"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Create a database connection
    $hostname = "localhost";
    $username = "root";
    $password_db = "";
    $database = "contact_form";

    $conn = new mysqli($hostname, $username, $password_db, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email already exists
    $email_check_sql = "SELECT * FROM users WHERE email = ?";
    $stmt_check_email = $conn->prepare($email_check_sql);
    $stmt_check_email->bind_param("s", $email);
    $stmt_check_email->execute();
    $email_check_result = $stmt_check_email->get_result();

    if ($email_check_result->num_rows > 0) {
        $errors[] = "Email already exists. Please use a different email.";
    }

    // Check if phone number already exists
    $pnum_check_sql = "SELECT * FROM users WHERE pnum = ?";
    $stmt_check_pnum = $conn->prepare($pnum_check_sql);
    $stmt_check_pnum->bind_param("s", $pnum);
    $stmt_check_pnum->execute();
    $pnum_check_result = $stmt_check_pnum->get_result();

    if ($pnum_check_result->num_rows > 0) {
        $errors[] = "Phone number already exists. Please use a different phone number.";
    }

    // Verify that password and confirm password match
    if ($password !== $confirm_password) {
        $errors[] = "Password and confirm password do not match.";
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if (empty($errors)) {
        // Insert user data into the database using prepared statement
        $insert_sql = "INSERT INTO users (first_name, last_name, email, pnum, gender, password) 
                       VALUES (?, ?, ?, ?, ?, ?)";

        $stmt_insert_user = $conn->prepare($insert_sql);
        $stmt_insert_user->bind_param("ssssss", $first_name, $last_name, $email, $pnum, $gender, $hashed_password);

        if ($stmt_insert_user->execute()) {
            $_SESSION["signup_success"] = true; // Store signup success flag
            header("Location: signup_sucess.php"); // Redirect to success page
            exit();
        } else {
            $_SESSION["signup_errors"] = array("Database error: " . $stmt_insert_user->error);
        }
    } else {
        $_SESSION["signup_errors"] = $errors; // Store errors in the session
        $_SESSION["signup_errors_red_alert"] = true; // Store red alert 
    }

    header("Location: signup.php"); // Redirect back to signup page with errors
    exit();
}
?>
