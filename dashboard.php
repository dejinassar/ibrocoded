<?php
session_start(); // Start a new session or resume the existing session

require_once "includes/conn.php"; // Include the database connection file

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

require_once "includes/header.php"; // Include the header from the includes folder
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
<main>
    <div class="dashboard-container">
        <section class="dashboard-section">
            <h2>Welcome, <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?></h2>
            
            <!-- Display other user information here -->

            <!-- Form to upload profile picture -->
            <form method="post" action="upload-profile-pic.php" enctype="multipart/form-data">
                <input type="file" name="profile_pic">
                <button type="submit">Upload Profile Pic</button>
            </form>

            <!-- Form to edit user information -->
            <form method="post" action="edit-profile.php">
                <!-- Editable fields here -->
                <button type="submit">Edit Information</button>
            </form>
            
            <a href="logout.php">Logout</a>
        </section>
    </div>
</main>
</body>
</html>

<?php
require_once "includes/footer.php"; // Include the footer from the includes folder
?>
