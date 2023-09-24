<?php

require_once "includes/header.php"; // Include the header from the includes folder

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
<main>
    <div class="auth-container">
        <section class="auth-section">
            <h2>Signup</h2>
            <?php
            // Display errors in red alerts if any
            if (isset($_SESSION["signup_errors_red_alert"]) && isset($_SESSION["signup_errors"])) {
                echo "<div class='error-container'>";
                foreach ($_SESSION["signup_errors"] as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
                echo "</div>";
                unset($_SESSION["signup_errors_red_alert"]);
                unset($_SESSION["signup_errors"]);
            }
            ?>
            <form method="post" action="signup-process.php">
                <input type="text" name="first_name" placeholder="First Name" required minlength="2" maxlength="50">
                <input type="text" name="last_name" placeholder="Last Name" required minlength="2" maxlength="50">
                <input type="text" name="username" placeholder="username" required minlength="2" maxlength="50">
              
                <input type="email" name="email" placeholder="Email" required maxlength="100">
                <input type="tel" name="pnum" placeholder="Phone Number" required minlength="11" maxlength="11">

                <select name="gender" required>
                    <option value="gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <input type="password" name="password" placeholder="Password" required minlength="6" maxlength="50">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required minlength="6" maxlength="50">
                <button type="submit">Sign Up</button>
            </form>
        </section>
    </div>
</main>
</body>
</html>
<?php
require_once "includes/footer.php"; // Include the footer from the includes folder
?>
