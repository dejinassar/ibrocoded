<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user input
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $gender = $_POST["gender"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "INSERT INTO users (first_name, last_name, email, gender, password)
            VALUES ('$first_name', '$last_name', '$email', '$gender', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
// Include the database connection code
$host = "localhost";
$username = "pediforte";
$password = "pediforte";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

