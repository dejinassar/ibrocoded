<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ibrocoded</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Ibrocoded</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <?php
                session_start();
                if (isset($_SESSION["user_id"])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                    echo '<li><a href="signup.php">Signup</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
