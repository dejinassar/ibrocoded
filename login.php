<?php
require_once "includes/header.php"; // Include the header from the includes folder
?>
<main>
    <div class="auth-container">
        <section class="auth-section">
            <h2>Login</h2>

            <?php
            if (isset($_SESSION['email'])) {
                header("Location: dashboard.php");
                exit();
            }

            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error === "emptyfields") {
                    echo '<p class="error">Both email and password are required.</p>';
                } elseif ($error === "sqlerror") {
                    echo '<p class="error">Database error. Please try again later.</p>';
                } elseif ($error === "wrongPwd") {
                    echo '<p class="error">Incorrect password.</p>';
                } elseif ($error === "noUser") {
                    echo '<p class="error">No user found with this email.</p>';
                }
            }
            ?>

            <form method="post" action="login-process.php">
                <input type="email" name="email" placeholder="Email" required maxlength="100">
                <input type="password" name="password" placeholder="Password" required minlength="6" maxlength="50">
                <button type="submit" name="signin">Login</button>
            </form>

            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </section>
    </div>
</main>
