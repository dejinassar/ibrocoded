<?php
require_once "includes/conn.php";     // Include the database connection
require_once "includes/header.php"; // Include the header from the includes folder
?>
<!-- Rest of the signup page HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
    <img src="images/bg,jpg" alt="">
    <main>
    <div class="auth-container">
        <section class="auth-section">
            <h2>Signup</h2>
            <form method="post" action="signup-process.php">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <!-- Gender select with updated styles -->
                <select name="gender" required>
                <option value="gender">Gender</option>
                    
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    
                </select>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
        </section>
    </div>
</main>
<?php
    require_once "includes/footer.php"; // Include the header from the includes folder
?>
</body>
</html>
