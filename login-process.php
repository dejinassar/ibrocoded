<?php
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    require_once "includes/conn.php"; // Make sure this includes your database connection code

    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (you can add more validation as needed)
    if (empty($email) || empty($password)) {
        $_SESSION["login_errors_red_alert"] = true;
        $_SESSION["login_errors"][] = "Both email and password are required.";
        header("Location: login.php"); // Redirect back to login page
        exit();
    }

    // Check if the user exists in the database
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Authentication successful
            $_SESSION["user_id"] = $user["id"];
            header("Location: dashboard.php"); // Redirect to the dashboard
            exit();
        }
    }

    // Authentication failed
    $_SESSION["login_errors_red_alert"] = true;
    $_SESSION["login_errors"][] = "Invalid email or password.";
    header("Location: login.php"); // Redirect back to login page
    exit();
} else {
    // If the form wasn't submitted, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
