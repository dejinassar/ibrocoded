<?php
// Include the database connection code
$host = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum'];
    $message = $_POST['message'];

    // Validate input
    if (strlen($name) < 5) {
        $error = "Name too short, please enter your full name";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "You submitted an invalid email address!";
    } elseif (strlen($pnum) < 11) {
        $error = "Your Phone Number is too short";
    } elseif (strlen($pnum) > 11) {
        $error = "Your Phone Number is too long";
    } elseif (strlen($message) < 10) {
        $error = "Your message is too short";
    } else {
        // Use prepared statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO contact_message (name, email, pnum, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $pnum, $message);

        if ($stmt->execute()) {
            $Message = "Message sent! We will get back to you.";
        } else {
            $error = "Error: " . $stmt->error;
        }
    }
}

// Redirect back to the contact page with error or success message
if (isset($error)) {
    header("Location: contactus.php?error=" . urlencode($error));
} elseif (isset($Message)) {
    header("Location: contactus.php?success=" . urlencode($Message));
}

$conn->close();
?>
