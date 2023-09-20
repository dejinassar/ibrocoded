<?php

require_once "includes/header.php"; // Include the header from the includes folder
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<main>
    <div class="auth-container">
        <section class="auth-section">
            <h2>Login</h2>
            <?php
            // Display login errors in red alerts if any
            if (isset($_SESSION["login_errors_red_alert"]) && isset($_SESSION["login_errors"])) {
                echo "<div class='error-container'>";
                foreach ($_SESSION["login_errors"] as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
                echo "</div>";
                unset($_SESSION["login_errors_red_alert"]);
                unset($_SESSION["login_errors"]);
            }
            ?>
            <form method="post" action="login-process.php">
                <input type="email" name="email" placeholder="Email" required maxlength="100">
                <input type="password" name="password" placeholder="Password" required minlength="6" maxlength="50">
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </section>
    </div>
</main>
</body>
</html>

<?php
require_once "includes/footer.php"; // Include the footer from the includes folder
?>
